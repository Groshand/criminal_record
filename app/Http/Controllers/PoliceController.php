<?php

namespace App\Http\Controllers;

use App\Cout;
use App\Police;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PoliceController extends Controller
{
    public function addofficer(Request $request)
    {
        $type=$request->input('cp');
        if ($type=='police'){
            $officer=new Police();
        }elseif($type=='cout'){
            $officer=new Cout();
        }
        $officer->nic=$request->input('nic');
        $officer->id=$request->input('id');
        $officer->password=bcrypt($request->input('password'));
        $officer->policeStation=$request->input('area');

        $saved=$officer->save();
        if($saved){
            return redirect()->back()->with('message','New Police-Officer Added Success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }

    }
    public function policelogin(Request $request){
        if(Auth::guard('police')->attempt(['id'=>$request->id,'password'=>$request->password])){
            return view('component/police/searchuser');
        }else{
            return redirect()->back()->with('message','Incorrect Password or ID');
        }

    }
    public function searchpolice(Request $request){
        $police=Police::find($request->input('id'));
        if ($police){
            $user=User::find($police->nic);
        }

        if($police){
            return view('component/police/policeprofile',['user'=>$user,'police'=>$police]);
        }else{
            return redirect()->back()->with('message','Incorrect ID');
        }

    }
    public function owneprofile(){
        $police=Police::find(Auth::user()->id);
        $user=User::find($police->nic);
        $offense=DB::table('offenses')->get();//dd($offense);
        if($user && $police && $offense){
            return view('component/police/owneprofile',['user'=>$user,'police'=>$police,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
    public function plogout(){
        Auth::logout();
        session::flush();
        return view('component/police/policelogin');
    }
    public function palloffense(){
        $offense=DB::table('offenses')->get();
        if ($offense){
            return view('component/police/alloffense',['offense'=>$offense]);
        }
        else{
            return redirect()->back();
        }
    }
}
