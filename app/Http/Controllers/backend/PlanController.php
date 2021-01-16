<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use App\Models\Location;
use App\Models\Transport;
use App\Models\PlanTourist;
use Illuminate\Http\Request;

class PlanController extends Controller
{

     public function plan()
     {
         return view('backend.partials.plan_type');
     }

     public function plansubmit(Request $request)
     {
         Plan::create([
             'plan_type'=> $request->input('plan_type'),
             'tourist_id'=>auth()->user()->id,
             'location_id'=> $request->input('name'),
             'transport_id'=>$request->input('vehicle_type'),
             'total_no_of_participants'=>$request->input('total_no_of_participants'),
             'destination_from'=>$request->input('destination_from'),
             'destination_to'=>$request->input('destination_to'),
             'date_from'=>$request->input('date_from'),
            'date_to'=>$request->input('date_to'),
            'remarks'=>$request->input('remarks'),
            'token_money'=>$request->input('token_money'),
            'approximate_budget'=>$request->input('approximate_budget'),
            'approximate_budget'=>$request->input('transaction_number'),
        ]);

           return redirect()->back();
        }

    public function posted_plan_list()
    {
        $list=Plan::paginate(5);

        $touristname=User::with('touristnamerelation');
        $locationname=Location::with('locationnamerelation');
        $transportname=Transport::with('transportnamerelation');

        return view('backend.partials.posted_plan_list',compact('list','touristname','locationname','transportname'));
    }

    public function approved($id){


        $data = Plan::where('id','=', $id)->where('is_approved','=' ,'not approved')->first();
        if($data){

        
        $data->update([
            'is_approved'=>'approved',
        ]);
        }

        return redirect()->back();

    }

    public function approve_plan_list()
    {
        $list=Plan::where('is_approved','=' ,'approved')->paginate(5);
        return view ('backend.user.approved_plan_list',compact('list'));
    }

    // public function plan_tourist_list()

    public function tourist_list_per_plan()
    {
        $list=PlanTourist::paginate(5);
        return view('backend.user.joined_tourists_per_plan',compact('list'));
    }

    public function view_posted_plan($id)
    {
        $viewpostedplan= Plan::with('transportnamerelation')->find($id);
    
        return view('backend.user.view_posted_plan_list',compact('viewpostedplan'));
    }

    public function delete_posted_plan($id)
    {
        $deletepostedplan=Plan::find($id);
        
        
        if(!empty($deletepostedplan))
        {
            $deletepostedplan->delete();
            $msg="user deleted Successfully";
        }else{
            $msg="No data found.";
        }
         return redirect()->back()->with('message',$msg);
    }
    
    public function view_approved_plan($id)
    {
        $viewapprovedplan= Plan::find($id);
        return view('backend.user.view_approved_plan_list',compact('viewapprovedplan'));
    }


}
