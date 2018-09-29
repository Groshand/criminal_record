<?php

namespace App\Http\Controllers;

use App\Offense;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;
use Input;

class OffenseController extends Controller
{
    public function addOffense(Request $request,$id){
        $offense=new Offense();
        $offense->pDiscription=$request->input('discription');
        $offense->pOffenseId=$request->input('types');
        $offense->policeId=Auth::user()->id;
        $offense->userId=$id;
        $offense->coutOId=0;
        $offense->notification=1;
        $offense->accept=0;
        $offense->cDiscription=0;
        $saved=$offense->save();
      //  UserController::searchuserfrompolice($saved);
       if($saved){
            return redirect()->back()->with('message','Offense Added Success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }
    }
    public function getoffense($id){
        $offense=Offense::find($id);
        $user=User::find($offense->userId);
        $data=DB::table('Predefinedoffense')->get();
        if ($offense && $user && $data){
            return view('component/cout/acceptoffense',['user'=>$user,'offense'=>$offense,'data'=>$data]);
        }
        else{
            return redirect()->back();
        }
    }
    public function acceptoffense(Request $request,$id){
        $discription=$request->input('discription');
        $poffenseid=$request->input('types');
        $accept=$request->input('accept');
        $offense=Offense::find($id);
        $accept=DB::table('offenses')
            ->where('id',$id)
            ->update(['pOffenseId'=>$poffenseid,'cDiscription'=>$discription,'accept'=>$accept,'coutOId'=>Auth::user()->id]);
        if ($offense->accept!='0' && session()->get('cnotification')){
                $count=session()->get('cnotification');
                $count=$count-1;
                session()->put('cnotification',$count);
        }
        if ($accept){
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }
    }
    public function uoffense($id){

        $data=DB::table('Predefinedoffense')->get();
        $offense=Offense::find($id);
        if($offense->notification=='1'){
           $offense->notification='0';
           $offense->save();
           if(session()->get('notification')){
               $count=session()->get('notification');
               $count=$count-1;
               session()->put('notification',$count);
           }
       }
       /* if ($offense->notification=='1'){
            DB::table('offenses')
                ->where('id',$id)
                ->update(['notification'=>0]);
            if(session()->get('notification')){
                $count=session()->get('notification');
                $count=$count-1;
                session()->put('notification',$count);
            }
        }else{
        }*/

        if ($offense && $data){
            return view('component/user/offense',['offense'=>$offense,'data'=>$data]);
        }
        else{
            return redirect()->back();
        }
    }
    public function coffense($id){
            $data=DB::table('Predefinedoffense')->get();
            $offense=Offense::find($id);
            $user=User::find($offense->userId);
            if ($offense && $data){
                return view('component/cout/acceptoffense',['offense'=>$offense,'data'=>$data,'user'=>$user]);
            }
            else{
                return redirect()->back();
            }

    }
    public function poffense($id){
        $data=DB::table('Predefinedoffense')->get();
        $offense=Offense::find($id);
        $user=User::find($offense->userId);
        if ($offense && $data && $user){
            return view('component/police/seeoffense',['offense'=>$offense,'data'=>$data,'user'=>$user]);
        }
        else{
            return redirect()->back();
        }

    }
    public function searchoffense(Request $request){
        return $this->uoffense($request->input('id'));
    }
    public function calloffense(){
        $offense=DB::table('offenses')->get();
        if ($offense){
            return view('component/cout/alloffense',['offense'=>$offense]);
        }
        else{
            return redirect()->back();
        }
    }
    public function ualloffense(){
        $offense=DB::table('offenses')->get();
        if ($offense){
            return view('component/user/alloffense',['offense'=>$offense]);
        }
        else{
            return redirect()->back();
        }
    }
    public function palloffense(){
        $offense=DB::table('offenses')->get();
        $users=DB::table('users')->get();
        $data=DB::table('Predefinedoffense')->get();

        if(session()->get('pnotification')){
           session()->put('pnotification',0);

        }

        if ($offense && $users && $data){
            return view('component/police/alloffense',['offense'=>$offense,'users'=>$users,'data'=>$data]);
        }
        else{
            return redirect()->back();
        }
    }
}
