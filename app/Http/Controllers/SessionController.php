<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Input;

class SessionController extends Controller
{
    public function niclog(Request $request){
        $password=$request->input('password');
        if(12345==$password){
            session()->put('name','nicadmin');
            return view('component/nic/adduser');
        }
        else{
            return redirect()->back()->with('message','Incorrect password, Re-Enter correct password');
        }
    }
    public function niclogout(){
        if(session()->has('name')=='nicadmin'){
                session()->forget('name');
            return view('component/nic/login');
        }
        else{
            return redirect()->back();
        }
    }
    public function login(){
        return view('login');
    }
}
