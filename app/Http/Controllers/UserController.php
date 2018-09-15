<?php

namespace App\Http\Controllers;

use App\Offense;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Redirect;
use Input;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adduser(Request $request)
    {
        $user=new User();
        $user->id=$request->input('nic');
        $user->name=$request->input('name');
        $user->otherName=$request->input('oname');
        $user->email=$request->input('email');
        $user->gender=$request->input('gender');
        $user->bDay=$request->input('bday');
        $user->job=$request->input('job');
        $user->address=$request->input('address');
        $user->phoneNo=$request->input('phoneno');
        //start image upload
            $imagename=$request->input('nic');
            $filename= $imagename.'.jpg';//$file->getClientOriginalName();
            $request->file('userimage')->move(base_path().'/public/images/user/', $filename);
            $user->profileImage=$filename;
            $request->file('fingerprint')->move(base_path().'/public/images/fingerprint/', $filename);
            $user->fingerPrint=$filename;
        //end image upload
        $user->password=bcrypt(123);

        $saved=$user->save();
        if($saved){
            return view('component/nic/adduser')->with('message','New user Added success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }

    }
    public function searchuser(Request $request){
        $user=User::find($request->input('nic'));
        if($user){
            return view('component/nic/userprofile',['user'=>$user]);
        }else{
            return redirect()->back();
        }

    }
    public function searchuserfrompolice(Request $request){
        $user=User::find($request->input('nic'));
        $offense=DB::table('offenses')->get();
        $data=DB::table('Predefinedoffense')->get();
        if($user){
            return view('component/police/userprofile',['user'=>$user,'data'=>$data,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
    public function login(Request $request){
        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
//dd($data);'id'=>$request->id,'password'=>$request->password
            return view('component/user/userprofile');
        }//else{
           // return redirect()->back()->with('message','Not login successfully');
        //}
    }
    public function logout(){
        Auth::logout();
        session::flush();
        return view('component/user/userlogin');
    }
    public function niclog(Request $request){

    }
}
