<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\PlanTourist;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function registration(Request $request)
    { 

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'phone_number'=>'required',
            'n_id'=>'required|unique:users',
            'address'=>'required',
            'gender'=>'required',
            'status'=>'required'
 
        ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'n_id'=>$request->n_id,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'role'=>'user'


        ]);
        return redirect()->back()->with('message',' Registration Successful.');
      
        
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
             
        ]);
        $login_info=$request->except(['_token']);
      

         if (auth()->attempt($login_info)) {
            return redirect()->route('home');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    
    }

    public function logout()

    {

        auth()->logout();
        
        return redirect()->route('home');

    }

    public function user_profile()
    {
        
        $tourist = auth()->user();
        $created_plan = Plan::where('tourist_id','=',$tourist->id)->get();
        $joined_plan = PlanTourist::where('tourist_id','=',$tourist->id)->get();

        return view('frontend.user.my_profile',compact('tourist','created_plan','joined_plan'));
    }
    
}
