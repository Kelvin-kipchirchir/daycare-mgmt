<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{

    function create(Request $request){
        $request->validate([
            'email'=>'required|email|max:15',
            'password'=>'required|max:50|min:5'

        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
         return view('pages.dashboard');
        }else{
            //$mess="user not found";
            return back();
        }
    }
     function store(Request $request){
        $request->validate([
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|max:15|min:5',
            'cpass'=>'required|max:15|min:5'
            //password can add a number of characters such as:'regex:/[a-z]/','regex:/[A-Z]/','regex:[0-9]/','regex:[@$*#!]/',
        ]);
        
         $user=new User;
         $user->username=$request->input('username');
         $user->email=$request->input('email');
         $user->password=Hash::make($request->input('password'));
         $user->save();
        
         

     }

     function show(Request $req){

        $users= User::all();
        return view('pages.users',compact('users'));


     }



}
