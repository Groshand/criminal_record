<?php

namespace App\Http\Controllers;

use App\Offense;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Input;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adduser(Request $request)
    {
        $rules=['nic'=>'required|numeric|digits:9',
            'name'=>'required',
            'oname'=>'required',
            'gender'=>'required',
            'bday'=>'required',
            'address'=>'required',
            'phoneno'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'job'=>'required',
            'userimage'=>'required|image',
            'fingerprint'=>'image|required'
        ];
        $msg=[


        ];
        $validator = Validator::make($request->all(),$rules,$msg);
        if ($validator->fails()) {
            return redirect('adduser')
                ->withErrors($validator)
                ->withInput();

        }
        $user=new User();
        $nic=$user->id=$request->input('nic');
        $name=$user->name=$request->input('name');
        $user->otherName=$request->input('oname');
        $email = $user->email=$request->input('email');
        $user->gender=$request->input('gender');
        $user->bDay=$request->input('bday');
        $user->job=$request->input('job');
        $user->address=$request->input('address');
        $user->phoneNo=$request->input('phoneno');
        $pas=$user->password =12345;//rand(100000, 999999);

            $imagename=$request->input('nic');
            $filename= $imagename.'.jpg';//$file->getClientOriginalName();
            $request->file('userimage')->move(base_path().'/public/images/user/', $filename);
            $user->profileImage=$filename;
            $request->file('fingerprint')->move(base_path().'/public/images/fingerprint/', $filename);
            $user->fingerPrint=$filename;
        //end image upload
        $user->password=bcrypt($pas);


        Mail::send(['text' => 'post.mail'],[ 'name' => $name,'pas'=>$pas, 'nic'=>$nic], function ($message) use ($email)
        {
            $message->from('find.criminal.sl@gmail.com', 'Find The Criminal');
            $message->to( $email ,'To Your');
            $message->subject('Your Password');
        });


        $saved=$user->save();
        if($saved){
            return redirect('adduser')->with('message','New user Added Successfully');
        }
        else{
            return redirect()->back()->with('message','Unsuccessfully');
        }

    }
    public function searchuser(Request $request){
        $rules=['id'=>'required|numeric|digits:9',

        ];
        $msg=[


        ];
        $validator = Validator::make($request->all(),$rules,$msg);
        // dd('dd');
        if ($validator->fails()) {
            return redirect('adduser')
                ->withErrors($validator)
                ->withInput();

        }

        $user=User::find($request->input('id'));
        if($user){
            return view('component/nic/userprofile',['user'=>$user]);
        }else{
            return redirect()->back();
        }

    }
    public function searchuserfrompolice(Request $request){

        $rules=['nic'=>'required|numeric|digits:9'];
        $msg=[
            'nic.size'=>'NIC must be 9 numbers','nic.numeric'=>'Please enter only numaric value'];
        $validator = Validator::make($request->all(), $rules,$msg);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

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

        $rules=['im'=>'required|image'];
        $msg=['im.image'=>'The file is must be jpeg, png, bmp, gif, svg'];
        $validator = Validator::make($request->all(),$rules,$msg);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $request->file('im')->move(base_path().'/public/images/input/', 'image.jpg');
        $img=new User();
        $data=$img->python();
      //Storage::delete('/public/images/input/image.jpg');
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
