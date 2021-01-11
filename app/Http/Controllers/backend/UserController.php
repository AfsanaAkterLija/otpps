<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function form()
    { 

        return view('backend.user.registration_form');
        
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required'
        ]);
        User::create([
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
    public function list()
    {
        $list=User::paginate(5);
        return view('frontend.user.user_list',compact('list'));
    }

    public function user_delete($id)
    {
        $user=User::find($id);
        if(!empty($user))
        {
            $user->delete();
            $message="user deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
    }

    public function user_view($id)
    {
        $user=User::find($id);
            return view('frontend.user.view_user_info',compact('user'));
    }
    
    
    public function login()
    {
        return view('backend.user.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
         ]);

         $login_info=$request->except(['_token']);

         if (Auth::attempt($login_info)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
 
    }
    public function logout()
    {
        Auth::logout();
        return redirect()-> route('login');
    }
}

