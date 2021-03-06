<?php

namespace App\Http\Controllers;

use App\Cout;
use App\Police;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PoliceController extends Controller
{
    public function addofficer(Request $request)
    {
        $rules=['nic'=>'required|numeric|digits:9',
            'id'=>'required|numeric|digits:5',
            'area'=>'required',
            'cp'=>'required',

        ];
        $msg=[
            'cp.required'=>'Fild this feild',

        ];
        $validator = Validator::make($request->all(),$rules,$msg);
        if ($validator->fails()) {
            return redirect('adminlog')
                ->withErrors($validator)
                ->withInput();

        }

        $type=$request->input('cp');
        if ($type=='police'){
            $officer=new Police();
        }elseif($type=='cout'){
            $officer=new Cout();
        }
        $officer->nic=$request->input('nic');
        $officer->id=$request->input('id');
        $officer->password=bcrypt(147);
        $officer->policeStation=$request->input('area');

        $saved=$officer->save();
        if($saved){
            return redirect()->back()->with('message','New Officer Added Success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }

    }
    public function policelogin(Request $request){

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


        if(Auth::guard('police')->attempt(['id'=>$request->id,'password'=>$request->password])){
            $count=0;
            $offense=DB::table('offenses')->get();
            foreach ($offense as $ofns){
                if ($ofns->accept==2 ){
                    $count=$count+1;
                }
            }
            session()->put('pnotification',$count);
            return view('component/police/home');
        }else{
            return redirect()->back()->with('message','Incorrect Password or ID');
        }

    }
    public function searchpolice(Request $request){

        $rules=['id'=>'required|numeric|digits:5'];
        $msg=[
            'id.size'=>'id must be 5 Integer ',

        ];
        $validator = Validator::make($request->all(), $rules,$msg);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

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
        $offense=DB::table('offenses')->get();
        $user12=DB::table('users')->get();
        $data=DB::table('Predefinedoffense')->get();
//dd($offense);
        if($user && $police && $offense && $user12 && $data){
            return view('component/police/owneprofile',['user'=>$user,'data'=>$data,'user12'=>$user12,'police'=>$police,'offense'=>$offense]);
        }else{
            return redirect()->back();
        }

    }
    public function plogout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('policelogin');

    }

}
