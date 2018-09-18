<?php

namespace App\Http\Controllers;

use App\Cout;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use Input;


class CoutController extends Controller
{
    public function coutlogin(Request $request){
        if(Auth::guard('cout')->attempt(['id'=>$request->id,'password'=>$request->password])){
            $count=0;
            $offense=DB::table('offenses')->get();
            foreach ($offense as $ofns){
                if ($ofns->accept==0){
                    $count=$count+1;
                }
            }
            session()->put('cnotification',$count);
            return view('layout/cout');

        }else{
            return redirect()->back()->with('message','Incorrect Password or ID');
        }

    }
    public function clogout(){
        Auth::logout();
        if(session()->has('notification')) {
            session()->forget('notification');
        }
        return view('component/cout/coutlogin');
    }
    public function searchuserfromcout(Request $request){
        $user=User::find($request->input('nic'));
        $offense=DB::table('offenses')->get();
        if($user && $offense){
            return view('component/cout/userprofile',['user'=>$user,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
    public function cowneprofile(){
        $cout=Cout::find(Auth::user()->id);
        $user=User::find($cout->nic);
        $offense=DB::table('offenses')->get();
        if($user && $cout && $offense){
            return view('component/cout/owneprofile',['user'=>$user,'cout'=>$cout,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
}
