<?php

namespace App\Http\Controllers;

use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
use Illuminate\Http\Request;

class AutoWorldController extends Controller
{
    public function index(){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::showAllCarsWithBrand();
        return view('autoworld.index',[
            'cars' => $cars, 'brands' => $brands
        ]);
    }

    public function searchByBrand($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getAllCarByBrand($id);
        return view('autoworld.index',[
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


}
