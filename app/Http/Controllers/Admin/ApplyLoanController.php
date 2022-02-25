<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ApplyLoanNotification;
use App\Models\ApplyLoan;
use Carbon\Carbon;
use App\Models\Loan;

use DB;
use RealRashid\SweetAlert\Facades\Alert;
class ApplyLoanController extends Controller
{
    public function applyloan(Request $request, $id)
    {
        $title = 'Apply Loan';
        $loan = Loan::find($id);

        $countries = DB::table("countries")->pluck("province","id_province");

        if (session('success_message'))
        {
            Alert::success(__('alert.Success'), session('success_message'));
        }
         return view('frontend.product.applyloan',compact('loan','title','countries'));
    }

    public function applyotherloan(Request $request)
    {
        $title = 'Apply Loan'; 
        
        // $countries = DB::table('locations')->orderBy('province')->get()->groupBy(function($item) {
        //     return $item->province;
        // });

        $countries = DB::table("countries")->pluck("province","id_province");
        //return response()->json($countries);
      //  $grouped = DB::table("address");
       // $countries = $grouped->groupBy('id_country');
        
        if (session('success_message'))
        {
            Alert::success(__('alert.Success'), session('success_message'));
        }
        
        return view('frontend.product.applyotherloan',compact('title','countries'));
    }



    public function getState(Request $request)
	{

		$states = DB::table("states")
		->where("id_province",$request->country_id)
		->pluck("district","id_district");

		return response()->json($states);
		
	}

	public function getCity(Request $request)
	{
		$cities = DB::table("cities")
		->where("id_district",$request->state_id)
		->pluck("commune","id_commune");
		return response()->json($cities);
	}


    public function storeapplyotherloan(Request $request)
   {
       $data = $request->all();

       if($request->file('national_card')) {
        $card = $request->file('national_card');
        $filecard = time().'_'.$card->getClientOriginalName();

        // File upload location
       // $location = 'files';

        // Upload file
        $card->move(public_path('Media/National_Card'),$filecard);
    }
    else{
        $filecard = $loan->national_card;
    }

        $data['national_card'] = $filecard;

       

       $applyedloan = ApplyLoan::create($data);

       if($applyedloan)
        {
           
            $applyedloan->notify( new ApplyLoanNotification($applyedloan));

        }

       return redirect()->back()->withSuccessMessage(__('alert.ApplyLoanSubmit'));

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function storeapplyloan(Request $request, $id)
   {
       $loan = Loan::find($id);

       $data = $request->all();

       $data['id_loan'] = $id;

       if($request->file('national_card')) {
        $card = $request->file('national_card');
        $filecard = time().'_'.$card->getClientOriginalName();

        // File upload location
       // $location = 'files';

        // Upload file
        $card->move(public_path('Media/National_Card'),$filecard);
    }else{
        $filecard = $loan->national_card;
    }

        $data['national_card'] = $filecard;

        
       $applyedloan = ApplyLoan::create($data);

       if($applyedloan)
        {
           
            $applyedloan->notify( new ApplyLoanNotification($applyedloan));

        }


       return redirect()->back()->withSuccessMessage(__('alert.ApplyLoanSubmit'));

    }

   public function applyedloan()
   {

        $applyloans = ApplyLoan::latest()->paginate();

        $applyloanNotify = ApplyLoan::where('read_at', null);

        return view('admin.loan.applyloan',compact('applyloans','applyloanNotify'));
    }

    public function viewapplyedloan(Request $request, $id)
    {

       

        if($id){

            $viewapplyedloan = ApplyLoan::find($id);
            
            $date = Carbon::now();

           
            $data['read_at'] = $date;

            $viewapplyedloan->update($data);


            // Address

        $province = DB::table("countries")
		->where("id_province",'=',$viewapplyedloan->province)
        ->pluck("province");

        $district = DB::table("states")
		->where("id_district",'=',$viewapplyedloan->district)
        ->pluck("district");

        $commune = DB::table("cities")
		->where("id_commune",'=',$viewapplyedloan->commune)
        ->pluck("commune");
           
        
        }

        return view('admin.loan.viewapplyedloan', compact('viewapplyedloan', 'province', 'district', 'commune'));


    }

    public function aprove(Request $request, $id)
    {
        $applyloan = ApplyLoan::find($id);
        $data['status'] = $request->get('status');

        $data['comments'] = $request->get('comments');

        $applyloan->update($data);

        return redirect()->back();
    }



    

}
