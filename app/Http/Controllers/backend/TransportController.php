<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function transport()
    {
        return view('backend.user.transport');
    }

    public function transport_submit(Request $request)
    {
        
        $request->validate([
            'vehicle_type'=>'required',
            'vehicle_name'=>'required',
            'class'=>'required',
            'company'=>'required',
            'status'=>'required',
            'total_no_of_seat'=>'required'

        ]);
        
        Transport::create([
            'vehicle_type'=>$request->input('vehicle_type'),
            'vehicle_name'=>$request->input('vehicle_name'),
            'class'=>$request->input('class'),
            'company'=>$request->input('company'),
            'status'=>$request->input('status'),
            'total_no_of_seat'=>$request->input('total_no_of_seat'),


        ]);
        

        return redirect()->back()->with('msg','Transport Added Successfully');
        //dd($request->all());
    }

    public function transport_list()
    {
        $lists=Transport::paginate(5);
        return view('backend.user.transport_list',compact('lists'));
    }

    // transport category

    public function transport_category()
    {
        return view('backend.user.transport_category');
    }

    // public function transport_category_submit(Request $request)
    // {
        
    // }


    public function transport_delete($id)
    {
        $transportdelete=Transport::find($id);
        if(!empty($transportdelete))
        {
            $transportdelete->delete();
            $msg="Transport deleted Successfully";
        }else{
            $msg="No data found.";
        }
         return redirect()->back()->with('message',$msg);
    }

    public function edit_transport($id)
    {
        
        $edittransport=Transport::find($id);
        return view('backend.user.edit_transport_',compact('edittransport'));

    }


    public function update_transport(Request $request, $id)
    {
        $request->validate([

            'vehicle_type'=>'required',
            'vehicle_name'=>'required',
            'class'=>'required',
            'company'=>'required',
            'status'=>'required',
            'total_no_of_seat'=>'required'
        ]);
    

    Transport::find($id)->update([

            'vehicle_type'=>$request->input('vehicle_type'),
            'vehicle_name'=>$request->input('vehicle_name'),
            'class'=>$request->input('class'),
            'company'=>$request->input('company'),
            'status'=>$request->input('status'),
            'total_no_of_seat'=>$request->input('total_no_of_seat'),
        ]);

    return redirect()->back()->with('msg','Transport Added Successfully');

    }


}
