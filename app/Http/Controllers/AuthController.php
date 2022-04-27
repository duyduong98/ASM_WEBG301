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
            return redirect()->back()->withErrors('Wrong Username or Password')->withInput();
        }else{
            $key = sha1($request->input('password')); //hash password with SHA1
            foreach ($password as $p){
                $key2[] = $p->password;
            }
            if ($key != $key2[0]){
                return redirect()->back()->withErrors('Wrong Username or Password')->withInput();
            }else{
                Session::put('username', $request->input('username'));
                return redirect()->route('cars.index');
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
                'username' => ['required','max:50'],
                'password' => ['required','max:50'],
            ],[
                'password.required' => 'Please enter your password'
            ]
        );
    }

}
