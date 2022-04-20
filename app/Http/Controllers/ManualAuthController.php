<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManualAuthController extends Controller
{
    public function ask(){
        return view('adminauto.manualAuth.login');
    }
    public function signin(Request $request){

        //TODO: write your code to verify username and password
        /**
         * you have to check if username and password
         * match a record in database
         * then save username in Session and move to next page
         * Otherwise, go back to login form
         */

        Session::put('username', $request->input('username'));
        return redirect()->route('cars.index');
    }

    public function signout(){
        if (Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('ManualAuthController@ask');
    }
}
