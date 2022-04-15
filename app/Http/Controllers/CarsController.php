<?php

namespace App\Http\Controllers;

use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::showAllCarsWithBrand();
        return view('adminauto.cars.index',[
            'cars' => $cars, 'brands' => $brands
        ]);
    }
    public function searchByBrand($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getAllCarByBrand($id);
        return view('adminauto.cars.index',[
            'cars' => $cars, 'brands' => $brands
        ]);
    }




}
