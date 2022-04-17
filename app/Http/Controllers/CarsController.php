<?php

namespace App\Http\Controllers;

use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function searchById($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getCarById($id);
        return view('adminauto.cars.detail',[
            'cars' => $cars[0],'brands' => $brands
        ]);
    }

    public function confirm($id){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::getCarById($id);
        return view('adminauto.cars.confirm',[
            'cars' => $cars[0],'brands' => $brands
        ]);
    }

    public function destroy($id, Request $request){
        if ($request->input('id') != $id){
            return redirect()->action('CarsController@index');
        }
        CarsRepos::delete($id);
        return redirect()->action('CarsController@index');
    }

    public function create(){
        $brands = BrandsRepos::showAllBrands();
        return view('adminauto.cars.add',[
           'cars' =>(object)[
               'car_id' => 0,
               'car_name' => '',
               'brand_id' => 0,
               'car_price' => 0,
               'car_color' => '',
               'car_images' => '',
               'car_descrip' => ''
           ], 'brands' => $brands
        ]);
    }

    public function store(Request $request){
        $cars =(object)[
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),
            'color' => $request->input('color'),
            'images' => $request->input('images'),
            'descrip' => $request->input('descrip'),
        ];

        $newId = CarsRepos::insert($cars);

        return redirect()->action('CarsController@index');
    }

}
