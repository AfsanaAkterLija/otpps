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
            'phone_number'=>'required|min:11|max:16',
            'n_id'=>'required|unique:users',
            'address'=>'required',
            'gender'=>'required',
           
 
        ]);

        $photo = '';

        $fileName = $request->hasFile('image');
        if($fileName){
            $photo = uniqid('photo_',true) . '.' . $request->file('image')->getClientOriginalName();
          
            $request->file('image')->move(public_path('/uploads/user'),$photo);
        }
       

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'n_id'=>$request->n_id,
            'phone_number' =>$request->input('phone_number'),
            'gender'=>$request->gender,
            'status'=>$request->status,
            'role'=>'user',
            'address'=>$request->address,
            'image' => $photo


        ]);
        return redirect()->back()->with('msg',' Registration Successful.');
      
        
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


// <img src="{{asset('/uploads/user'.auth()->user()->image}}" alt="">
