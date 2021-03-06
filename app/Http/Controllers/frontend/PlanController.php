<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Transport;
use App\Models\Location;
use App\Models\PlanTourist;
use App\Models\User;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function plan()
    {
        $tt=Transport::get();
        $tl=Location::get();
        return view('frontend.user.plan', compact('tt','tl'));
    }

    public function plansubmit(Request $request)
    {
        
        
        
        $request->validate([
            
            'total_no_of_participants'=>'required',
            'destination_from'=>'required',
            'destination_to'=>'required',
            'date_from'=>'required',
            'date_to'=>'required',
            'remarks'=>'required',
            'token_money'=>'required',
            'approximate_budget'=>'required',

        ]);
       
        Plan::create([
        
            'tourist_id'=>auth()->user()->id,
            'plan_type'=>$request->input('plan_type'),
            'no_of_joined_people'=>'0',
            'location_id'=>$request->input('location'),
            'transport_id'=>$request->input('transport'),
            'total_no_of_participants'=>$request->input('total_no_of_participants'),
            'destination_from'=>$request->input('destination_from'),
            'destination_to'=>$request->input('destination_to'),
            'date_from'=>$request->input('date_from'),
            'date_to'=>$request->input('date_to'),
            'remarks'=>$request->input('remarks'),
            'token_money'=>$request->input('token_money'),
            'approximate_budget'=>$request->input('approximate_budget'),
            'transaction_number'=>$request->input('transaction_number'),
            'is_approved'=>'not approved',
        ]);

        return redirect(route('home'))->with('msg','Package Added Successfully');
    }

    public function edit_plan($id)
    {
        $tt=Transport::get();
        $tl=Location::get();
        $editplan=Plan::find($id);
        return view('frontend.user.edit_plan',compact('editplan','tl','tt'));

    }

    public function update_plan(Request $request,$id)
    {
        $request->validate([
            
            'total_no_of_participants'=>'required',
            'destination_from'=>'required',
            'destination_to'=>'required',
            'date_from'=>'required',
            'date_to'=>'required',
            'remarks'=>'required',
            'token_money'=>'required',
            'approximate_budget'=>'required',
            'transaction_number'=>'required',

        ]);
       
        Plan::find($id)->update([
        
            'tourist_id'=>auth()->user()->id,
            'plan_type'=>$request->input('plan_type'),
            'no_of_joined_people'=>'0',
            'location_id'=>$request->input('location'),
            'transport_id'=>$request->input('transport'),
            'total_no_of_participants'=>$request->input('total_no_of_participants'),
            'destination_from'=>$request->input('destination_from'),
            'destination_to'=>$request->input('destination_to'),
            'date_from'=>$request->input('date_from'),
            'date_to'=>$request->input('date_to'),
            'remarks'=>$request->input('remarks'),
            'token_money'=>$request->input('token_money'),
            'approximate_budget'=>$request->input('approximate_budget'),
            'transaction_number'=>$request->input('transaction_number'),
            'is_approved'=>'not approved',
        ]);

        return redirect()->back()->with('message','Plan Updated Successfully.');
    }

    
    public function plan_detail($id)
    {
        $locationname=Location::with('locationnamerelation');
        $transportname=Transport::with('transportnamerelation');
        $plandetail=Plan::find($id);
        // dd($plandetail);
        $planCount=PlanTourist::where('plan_id','=',$id)->where('status','approved')->orWhere('plan_id','tourist_id')->count();
        
         
        return view('frontend.user.plan_detail',compact('planCount','plandetail','locationname','transportname'));
    }

    public function payment($id)
    {
        $plandetail=Plan::find($id);
        
        return view('frontend.user.plan_tourist',compact('plandetail'));
    }

    public function payment_submit(Request $request,$id)
    {
        
        $plan= Plan::find($id);
    
        
        $request->validate([
            // 'plan_id'=>'required',
            'transaction_id'=>'required',
            'payment_method'=>'required',
            'transaction_number'=>'required|min:11|max:16'
            

        ]);

        
        
        PlanTourist::create([
            'plan_id'=> $plan->id,
            'tourist_id'=>auth()->user()->id,
            'transaction_id'=>$request->input('transaction_id'),
            'payment_method'=>$request->input('payment_method'),
            'paid_amount'=>$plan->token_money,
            'transaction_number'=>$request->input('transaction_number')
            
        ]);

        $plan->increment('no_of_joined_people');
        $plan->save();

        return redirect(route('home'))->with('msg','Registration form filled Successfully');
    }

    public function tourist_list_per_plan()
    {
        $list=PlanTourist::paginate(5);
        $touristname=User::with('touristnamerelation');
        return view('frontend.user.joined_tourist_per_plan',compact('list'));
    }

    public function tourist_approve($id){

        
        $data = PlanTourist::where('id','=', $id)->where('status','=' ,'pending')->first();
        if($data){

        
        $data->update([
            'status'=>'approved',
        ]);
        }

        return redirect()->back();

    }

    public function joined_tourist_receipt($id)
    {
        $user = auth()->user();
        $paymentinfo=PlanTourist::with('plan')->find($id);
  
        // dd($paymentinfo);
        
        return view('frontend.user.receipt_form',compact('user','paymentinfo'));
    }

}
