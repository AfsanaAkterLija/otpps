<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location()
    {
        return view('backend.user.location');
    }

    public function location_submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'opening_time_from'=>'required',
            'opening_time_to'=>'required',
            'weekly_holiday'=>'required',
            'contact_person_name'=>'required',
            'contact_person_phn_no'=>'required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'
        ]);

        Location::create([
            'name'=>$request->input('name'),
            'opening_time_from'=>$request->input('opening_time_from'),
            'opening_time_to'=>$request->input('opening_time_to'),
            'weekly_holiday'=>$request->input('weekly_holiday'),
            'contact_person_name'=>$request->input('contact_person_name'),
            'contact_person_phn_no'=>$request->input('contact_person_phn_no')
        ]);

        return redirect()->back()->with('msg','Location Added Successfully');
    }

    public function location_list()
    {
        $lists=Location::paginate(5);
        return view('backend.user.location_list',compact('lists'));
    }

    public function location_delete($id)
    {
        $locationdelete=Location::find($id);
        if(!empty($locationdelete))
        {
            $locationdelete->delete();
            $msg="location deleted Successfully";
        }else{
            $msg="No data found.";
        }
         return redirect()->back()->with('message',$msg);
    }

    public function edit_location($id)
    {
        
        $editlocation=Location::find($id);
        return view('backend.user.edit_location',compact('editlocation'));

    }

    public function update_location(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'opening_time_from'=>'required',
            'opening_time_to'=>'required',
            'weekly_holiday'=>'required',
            'contact_person_name'=>'required',
            'contact_person_phn_no'=>'required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'
        ]);

        Location::find($id)->update([

            'name'=>$request->input('name'),
            'opening_time_from'=>$request->input('opening_time_from'),
            'opening_time_to'=>$request->input('opening_time_to'),
            'weekly_holiday'=>$request->input('weekly_holiday'),
            'contact_person_name'=>$request->input('contact_person_name'),
            'contact_person_phn_no'=>$request->input('contact_person_phn_no')
        ]);

        return redirect()->back()->with('msg','Location Added Successfully');



    }    

}
