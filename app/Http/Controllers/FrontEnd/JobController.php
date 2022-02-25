<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobType;

use DB;
use RealRashid\SweetAlert\Facades\Alert;
class JobController extends Controller
{
    public function detailjob($id)
    {
    
        $title = 'Job Detail';
       $job = Job::find($id);

       $latestjobs = Job::latest()->paginate(3);

        return view('frontend.job.detailjob',compact('job','latestjobs','title'));
    }

    public function job()
    {
        $title = 'Jobs';
       $jobs = Job::latest()->paginate(6);

       $latestjobs = Job::latest()->paginate(3);

        return view('frontend.job.index',compact('jobs','latestjobs','title'));
    }

    public function jobcategory($title_en)

    {
        $title = 'Job Categories';

        if(JobType::where('title_en', $title_en)->exists())
        {
            $jobtype = JobType::where('title_en', $title_en)->first();

            

            $jobs = Job::where('id_job_type', $jobtype->id)->latest()->paginate(6);

            $latestjobs = Job::latest()->paginate(3);
            
            return view('frontend.job.jobcategory',compact('jobtype','jobs','latestjobs','title'));

        }
        else
        {
            return redirect('/')->with('message', "Job No Data to show!");
        }
        

       
    }

    public function applyjob(Request $request, $id)
    {
        $title = 'Apply Jobs';

        $job = Job::find($id);

        $countries = DB::table("countries")->pluck("province","id_province");
        if (session('success_message'))
        {
            Alert::success(__('alert.Success'), session('success_message'));
        }

        
        return view('frontend.job.applyjob',compact('job','title','countries'));
    }
}
