<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function ask(){
        return view('adminauto.auth.login');
    }
    public function signin(Request $request){
        /*dd($request->all());*/
        $this->formValidation($request)->validate();
        $username = $request->input('username');
        $password = AdminRepos::login($username);

        if($password == null){
            return redirect()->action('AuthController@ask');
        }else{
            $key = md5($request->input('password')); //
            foreach ($password as $p){
                $key2[] = $p->password;
            }
            if ($key != $key2[0]){
                return redirect()->action('AuthController@ask');
            }else{
                Session::put('username', $request->input('username'));
                return redirect()->route('cars.index');
                /*$admin2 = (object)[
                  'username'=>$request->input('username'),
                    'password'=>$key,

                ];
                return view('adminauto.auth.test',[
                    'admin'=>$admin2,'key' => $key2
                ]);*/
             }
        }
    }
    public function signout(){
        if (Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('AuthController@ask');
    }


    private function formValidation($request){
        return Validator::make(
            $request->all(),
            [
                'username' => ['required'],
                'password' => ['required']
            ]
        );
    }

}
