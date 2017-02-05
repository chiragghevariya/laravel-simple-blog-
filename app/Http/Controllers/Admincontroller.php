<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

use App\Http\Requests;

class Admincontroller extends Controller
{

    public function getlogin(){

        return view('admin.login');
    }

    public function postlogin(Request $reques){

        $this->validate($reques,[

            'name'=>'required',

            'password'=>'required'

        ]);

        if(!Auth::attempt(['name'=> $reques['name'],'password'=>$reques['password']])){

            return redirect()->back();
        }

        return redirect()->route('admin.index');


    }
}
