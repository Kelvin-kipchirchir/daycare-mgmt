<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{

    function create(Request $request){
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
echo "niceee";
        }else{
            return back();
        }
    }
     function store(Request $request){
         $user=new User;
         $user->username=$request->input('username');
         $user->email=$request->input('email');
         $user->password=Hash::make($request->input('password'));
         $user->save();
         

     }

     function show(Request $req){

        $users= User::all();
        return view('pages.dashboard',compact('users'));


     }



}
