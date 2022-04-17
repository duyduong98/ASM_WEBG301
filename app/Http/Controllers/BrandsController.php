<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\BrandsRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    public function index(){
        $brands = BrandsRepos::showAllBrands();
        return view('adminauto.brands.index',[
            'brands' => $brands
        ]);
    }
    public function edit($brand_id){
        $brands = BrandsRepos::showBrandById2($brand_id);
        return view('adminauto.brands.edit',[
            'brands' => $brands[0]
        ]);
    }
    public function update($brand_id, Request $request){
        /*dd($request->all());*/
        if ($request->input('id') != $brand_id){
            return redirect()->action('BrandsController@index');
        }
        $this->formValidation($request)->validate();
        $brand = (object)[
            'brand_name' => $request->input('name'),
            'brand_logo' => 'images\\'.$request->input('images'),
            'brand_id' => $request->input('id'),
        ];
        BrandsRepos::update($brand);
        return redirect()->action('BrandsController@index');
    }
    public function confirm($brand_id){
        $brands = BrandsRepos::showBrandById2($brand_id);
        return view('adminauto.brands.confirm',[
            'brands' => $brands[0]
        ]);
    }
    public function destroy($brand_id, Request $request){
        if ($request->input('id') != $brand_id){
            return redirect()->action('BrandsController@index');
        }
        BrandsRepos::delete($brand_id);
        return redirect()->action('BrandsController@index');
    }
    
    private function formValidation($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'images' => ['required'],
            ]
        );
    }
}
