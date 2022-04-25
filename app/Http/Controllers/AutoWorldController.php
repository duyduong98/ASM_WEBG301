<?php

namespace App\Http\Controllers;

use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutoWorldController extends Controller
{
    public function index(){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::showAllCarsWithBrand();
        $mostCars = CarsRepos::get3CarMostPrice();
        return view('autoworld.index',[
            'cars' => $cars,'mostCars' => $mostCars, 'brands' => $brands
        ]);
    }
    public function searchByName(Request $request){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::searchByName($request->input('key'));
        return view('autoworld.search',[
            'cars' => $cars, 'brands' => $brands
        ]);

    }
    public function searchByBrand($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getAllCarByBrand($id);
        return view('autoworld.search',[
            'cars' => $cars, 'brands' => $brands
        ]);
    }
    public function detail($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getCarById($id);
        return view('autoworld.detail',[
            'cars' => $cars[0],'brands' => $brands
        ]);
    }

    public function registrationForm(){
        $brands = BrandsRepos::showAllBrands();
        return view('autoworld.register',[
            'brands' => $brands
        ]);
    }
    public function storeCus(Request $request){
        /*dd($request->all());*/
        $this->formValidation($request)->validate();
        $customer = (object)[
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];
        CustomerRepos::store($customer);
        return redirect()->action('AutoWorldController@index');
    }
    public function formValidation($request){
        return Validator::make($request->all(),[
            'name' => ['required'],
            'dob' => ['required'],
            'gender' => ['required', 'starts_with:F,M,O'],
            'address' => ['required'],
            'email'=> ['required', 'email:rfc'],
            'phone' => ['required','digits:10', 'starts_with:0']
        ]);
    }

    public function policy(){
        return view('autoworld.policy');
    }
}
