<?php

namespace App\Http\Controllers;

use App\Offense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OffenseController extends Controller
{
    public function addOffense(Request $request,$id){
        $offense=new Offense();
        $offense->discription=$request->input('discription');
        $offense->pOffenseId=$request->input('types');
        $offense->policeId=Auth::user()->id;
        $offense->userId=$id;
        $offense->coutOId=1;
        $saved=$offense->save();
      //  UserController::searchuserfrompolice($saved);
       if($saved){
            return redirect()->back()->with('message','Offense Added Success');
        }
        else{
            return redirect()->back()->with('message','Unsuccess');
        }
    }
}
