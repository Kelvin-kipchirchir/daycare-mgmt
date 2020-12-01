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
            'email'=>'required|email|max:255',
            'password'=>'required|max:255|min:255';

        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
         return view('pages.dashboard');
        }else{
            return back();
        }
    }
     function store(Request $request){
        $request->validate([
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|max:15|min:5'
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
