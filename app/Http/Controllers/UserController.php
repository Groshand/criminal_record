<?php

namespace App\Http\Controllers;

use App\Offense;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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
        $user->password =123; //rand();
       // mail($user->email,'password',$user->password);dd($user->password);
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
            return redirect()->back()->with('message','New user Added success');
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
            return redirect()->back()->with('message', 'Enter Correct NIC Number');
        }

    }
    public function searchbyfingerprint(Request $request){
        $request->file('im')->move(base_path().'/public/images/input/', 'image.jpg');
        $img=new User();
        $data=$img->python();
      //  Storage::delete('/public/images/input/image.jpg');
        if($data!=null){
            $data=preg_replace('/[^0-9]/','',$data);

            if ($data=='12121212') {
                return redirect()->back()->with('message', 'Enter Correct Finger Print');
            }
            else{
                $user=User::find($data);
                $offense=DB::table('offenses')->get();
                $data=DB::table('Predefinedoffense')->get();
                return view('component/police/userprofile',['user'=>$user,'data'=>$data,'offense'=>$offense]);
            }

        }else{
            return redirect()->back()->with('message', 'Enter Correct Finger Print');
        }


}
    public function login(Request $request){
        $count=0;
        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            $offense=DB::table('offenses')->get();
            foreach ($offense as $ofns){
                if ($ofns->userId==Auth::user()->id && $ofns->notification==1){
                    $count=$count+1;
                }
            }
           session()->put('notification',$count);
           return view('component/user/home');
        }else{
            return redirect()->back()->with('message','Enter Correct Email Or Password');
        }
    }
    public function ulogout(){
        Auth::logout();

        if(session()->has('notification')) {
            session()->forget('notification');
        }Session::flush();
        return view('component/user/userlogin');
    }
    public function userprofile(){
        $user=User::find(Auth::user()->id);
        $offense=DB::table('offenses')->get();
        $data=DB::table('Predefinedoffense')->get();

        if ($user && $offense){
            return view('component/user/userprofile',['user'=>$user,'offense'=>$offense,'data'=>$data]);
        }else{
            return redirect()->back();
        }
    }
}
