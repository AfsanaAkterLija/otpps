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


    
}
