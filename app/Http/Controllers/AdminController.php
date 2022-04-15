<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index(){
        $adminManage = AdminRepos::getAllAdmin();
        return view('adminauto.adminManage.index',[
            'adminManage' => $adminManage
        ]);
    }
    public function detail($user_name){
        $admin = AdminRepos::getAdminByName($user_name);
        return view('adminauto.adminManage.detail',[
            'admin' => $admin[0]
        ]);
    }
    public function edit($user_name){
        $adminManage = AdminRepos::getAdminByName($user_name);
        return view('adminauto.adminManage.edit',[
            'admin' => $adminManage[0]
        ]);
    }
    public function update($user_name, Request $request){
        if ($request->input('username') != $user_name){
            return redirect()->action('AdminController@index');
        }
        $this->formValidation($request)->validate();
        $adminManage = (object)[
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
        ];
        AdminRepos::update($adminManage);
        return redirect()->action('AdminController@index');
    }
    public function confirm($user_name){
        $adminManage = AdminRepos::getAdminByName($user_name);
        return view('adminauto.adminManage.confirm',[
            'admin' => $adminManage[0]
        ]);
    }
    public function destroy($user_name, Request $request){
        if ($request->input('id') != $user_name){
            return redirect()->action('AdminController@index');
        }
        AdminRepos::delete($user_name);
        return redirect()->action('AdminController@index');
    }


    private function formValidation($request){
        return Validator::make(
            $request->all(),
            [
                'username' => ['required'],
                'password' => ['required'],
                'email'=> ['required', 'email:rfc'],
                'address' => ['required'],
                'contact' => ['required','digits:10', 'starts_with:0']
            ]
        );
    }
}
