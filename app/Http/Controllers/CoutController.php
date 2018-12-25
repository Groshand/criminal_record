<?php

namespace App\Http\Controllers;

use App\Cout;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use Input;


class CoutController extends Controller
{
    public function coutlogin(Request $request){

        $rules=['id'=>'required|numeric|digits:5','password'=>'required|min:3'];
        $msg=[
            'id.size'=>'id must be 5 Integer ',

        ];
       $validator = Validator::make($request->all(), $rules,$msg);
       if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        if(Auth::guard('cout')->attempt(['id'=>$request->id,'password'=>$request->password])){
            $count=0;
            $offense=DB::table('offenses')->get();
           // if (count($offense)>0){
                foreach ($offense as $ofns){
                    if ($ofns->accept==0){
                        $count=$count+1;
                    }
                }
           // }

            session()->put('cnotification',$count);
            return view('component/cout/home');


        }else{
            return redirect()->back()->with('message','Please Enter Correct ID And Password');
        }

    }
    public function clogout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('coutlogin');
    }
    public function searchuserfromcout(Request $request){

        $rules=['nic'=>'required|numeric|digits:9'];
        $msg=[
            'nic.digits'=>'NIC must be 9 Integer','nic.numeric'=>'Please enter only numaric value'];
        $validator = Validator::make($request->all(), $rules,$msg);
        if ($validator->fails()) {
            return redirect('cout')
                ->withErrors($validator)
                ->withInput();
        }

        $user=User::find($request->input('nic'));
        $offense=DB::table('offenses')->get();
        $data=DB::table('Predefinedoffense')->get();
        if($user && $offense){
            return view('component/cout/userprofile',['user'=>$user,'data'=>$data,'offense'=>$offense]);
        }else{
            return redirect()->back()->with('message', 'Enter Correct NIC Number');
        }

    }
    public function cowneprofile(){
        $cout=Cout::find(Auth::user()->id);
        $user=User::find($cout->nic);
        $offense=DB::table('offenses')->get();
        $data=DB::table('Predefinedoffense')->get();
        $user12=DB::table('users')->get();


        if($user && $cout && $offense && $data){
            return view('component/cout/owneprofile',['user'=>$user,'user12'=>$user12,'data'=>$data,'cout'=>$cout,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
}
