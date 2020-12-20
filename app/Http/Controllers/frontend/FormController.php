<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cotourist;
use App\Models\Plan;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    { 

       ;
        return view('backend.partials.form');
        
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required'
        ]);
        Cotourist::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>$request->input('password'),
            'phone_number' =>$request->input('phone_number'),
            'n_id' =>$request->input('n_id'),
            'role' =>$request->input('role'),
            'status' =>$request->input('status'),
            'address' =>$request->input('address'), 
        ]);

        return redirect()->back()->with('message','Form filled successfully.');
        
    }
    public function table()
    {
        $list=Cotourist::paginate(5);
        return view('backend.partials.tables',compact('list'));
    }

    public function cotourist_delete($id)
    {
        $cotourist=Cotourist::find($id);
        if(!empty($cotourist))
        {
            $cotourist->delete();
            $message="cotourist deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
    }

    public function cotourist_view($id)
    {
        $cotourist=Cotourist::find($id);
            return view('backend.partials.view_cotourist_info',compact('cotourist'));
    }


    public function plan()
    {
        return view('backend.partials.plan_type');
    }

    public function plansubmit(Request $request)
    {
        Plan::create([
            'plan_type'=> $request->input('plan_type'),
            'tourist_id'=>1,
            'location_id'=>1,
            'transport_id'=>1,
            'total_no_of_participants'=>$request->input('total_no_of_participants'),
            'destination_from'=>$request->input('destination_from'),
            'destination_to'=>$request->input('destination_to'),
            'date_from'=>$request->input('date_from'),
            'date_to'=>$request->input('date_to'),
            'remarks'=>$request->input('remarks'),
            'token_money'=>1500,
            'approximate_budget'=>3500
        ]);

        return redirect()->back();
    }

    public function planlist()
    {
        $list=Plan::paginate(5);
        return view('backend.partials.plan_list',compact('list'));
    }
}
