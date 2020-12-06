<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cotourist;
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
            'password' =>$request->input('password') 
        ]);

        return redirect()->back()->with('message','Form filled successfully.');
        
    }
    public function table()
    {
        $list=Cotourist::paginate(5);
        return view('backend.partials.tables',compact('list'));
    }
}
