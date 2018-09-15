<?php

namespace App\Http\Controllers;

use App\Police;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoliceController extends Controller
{
    public function addofficer(Request $request)
    {
        $police=new Police();
        $police->nic=$request->input('nic');
        $police->id=$request->input('id');
        $police->password=bcrypt($request->input('password'));
        $police->policeStation=$request->input('area');
        $saved=$police->save();
        if($saved){
            return redirect()->back()->with('message','New Police-Officer Added Success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }

    }
    public function policelogin(Request $request){
        if(Auth::guard('police')->attempt(['id'=>$request->id,'password'=>$request->password])){
//dd($data);'id'=>$request->id,'password'=>$request->password
            return view('component/police/searchuser');
        }//else{
        // return redirect()->back()->with('message','Not login successfully');
        //}
    }
}
