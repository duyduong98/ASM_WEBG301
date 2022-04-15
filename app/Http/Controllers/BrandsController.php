<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    public function index(){
        $brands = AdminRepos::getAllBrand();
        return view('adminauto.brands.index',[
            'brands' => $brands
        ]);
    }
    public function edit($brand_id){
        $brands = AdminRepos::getBrandById($brand_id);
        return view('adminauto.brands.edit',[
            'brands' => $brands[0]
        ]);
    }
    public function update($brand_id, Request $request){
        if ($request->input('brand_id') != $brand_id){
            return redirect()->action('BrandsController@index');
        }
        $this->formValidation($request)->validate();
        $adminManage = (object)[
            'brand_name' => $request->input('brand_name'),
            'brand_logo' => $request->input('brand_logo'),
        ];
        AdminRepos::update($brand_id);
        return redirect()->action('BrandsController@index');
    }
    public function confirm($brand_id){
        $brands = AdminRepos::getBrandById($brand_id);
        return view('adminauto.brands.confirm',[
            'brands' => $brands[0]
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
