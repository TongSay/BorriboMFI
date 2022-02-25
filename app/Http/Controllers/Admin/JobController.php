<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\StoreJobRequest;
use App\Notifications\ApplyJobNotification;
use App\Models\Job;
use App\Models\JobType;
use App\Models\ApplyJob;
use App\Models\MediaJob;
use Carbon\Carbon;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeapplyjob(Request $request, $id)
    {
        $job = Job::find($id);

      //  $data = $request->all();

      $applyedjob = ApplyJob::create(
          [
        'name'=>$request->get('name'),
        'id_job' => $id,
        'other_job'=>$request->get('other_job'),
        'email'=>$request->get('email'),
        'phone'=>$request->get('phone'),
        'gender' =>$request->get('gender'),
        'dob'=>$request->get('dob'),
        
        'remark'=>$request->get('remark'),
        'province'=>$request->get('province'),
        'district'=>$request->get('district'),
        'commune'=>$request->get('commune'),
       

    ]
);

if($request->hasFile('photos'))
        {
        
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('photos');
            foreach($files as $file)
            {

                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('Media/File_Apply_Job'),$name);  
                $files[] = $name;
                
                    MediaJob::create([
                        'id_job' => $applyedjob->id,
                        'filename' => $name
                    ]);
            }
        }



       if($applyedjob)
        {
           
            $applyedjob->notify( new ApplyJobNotification($applyedjob));

        }

        

        return redirect()->back()->withSuccessMessage(__('alert.JobSubmit'));



    }
    public function applyedjob(){
        $applyjobs = ApplyJob::latest()->paginate();

        return view('admin.job.applyjob',compact('applyjobs'));
    }

    public function viewapplyedjob(Request $request, $id){

        if($id){

            $viewapplyedjob = ApplyJob::find($id);

            $date = Carbon::now();
            $files = MediaJob::all();
           
            $data['read_at'] = $date;

            $viewapplyedjob->update($data);
        }

        // Address

        $province = DB::table("countries")
		->where("id_province",'=',$viewapplyedjob->province)
        ->pluck("province");

        $district = DB::table("states")
		->where("id_district",'=',$viewapplyedjob->district)
        ->pluck("district");

        $commune = DB::table("cities")
		->where("id_commune",'=',$viewapplyedjob->commune)
        ->pluck("commune");
       
        

        return view('admin.job.viewapplyedjob', compact('viewapplyedjob','files','province','district','commune'));


    }



    public function job()
    {
        $title = 'Jobs';
       $jobs = Job::latest()->paginate(6);

       $latestjobs = Job::latest()->paginate(3);

        return view('job.index',compact('jobs','latestjobs','title'));
    }

    public function index()
    {
        $jobs = Job::all();
        
        return view('admin.job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
       
        
        $data = $request->all();
        $data['id_user'] = auth()->user()->id;
        
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('JobPicture'),$image);
        }else{
            $image = 'job_null.jpg';
        }
        $data['image']=$image;
        Job::create($data);
        return redirect()->back()->with('message','Job created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('admin.job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $job = Job::find($id);
        
        $data = $request->all();

        $data['id_user'] = auth()->user()->id;
        
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('JobPicture'),$image);
        }else{
            $image = $job->image;
        }
        $data['image']=$image;

        $job->update($data);
        return redirect(route('job.index'))->with('message','Job updated Successfully!');
    }

    public function aprove (Request $request, $id)
    {
        $applyjob = ApplyJob::find($id);
        $data['status'] = $request->get('status');

        $data['message'] = $request->get('message');

        $applyjob->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
