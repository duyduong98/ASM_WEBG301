<?php

namespace App\Http\Controllers;

use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class CarsController extends Controller
{
    public function index(){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::showAllCarsWithBrand();
        return view('adminauto.cars.index',[
            'cars' => $cars, 'brands' => $brands
        ]);
    }
    public function searchByName(Request $request){
        $brands = BrandsRepos::showAllBrands();
        $cars = CarsRepos::searchByNameWithBrand($request->input('key'));
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
        unlink(public_path($request->input('images')));
        return redirect()->action('CarsController@index');
    }

    public function create(){
        $brands = BrandsRepos::showAllBrands();
        return view('adminauto.cars.add',[
           'cars' =>(object)[
               'car_id' => 0,
               'car_name' => '',
               'brand_id' => '',
               'car_price' => 0,
               'car_color' => '',
               'car_images' => ' \ \ ',
               'car_descrip' => ', '
           ], 'brands' => $brands
        ]);
    }

    public function store(Request $request){
        /*dd($request->all());*/
        $this->formValidation($request)->validate();
        $brandName = BrandsRepos::getBrandName($request->input('brand'));
        foreach ($brandName as $b){
            $key[]= $b->brand_name;
        }
        $fileStore = strtolower($key[0]);
        $file = $request->file('images');
        $fileName = $file->getClientOriginalName();
        $img = 'images\\'.$fileStore.'\\'.$fileName;
        $cmpImages = CarsRepos::getImages();
        foreach ($cmpImages as $c){
            if ($img == $c->car_images){
                return redirect()->back()->withErrors('Images belong another car')->withInput();
            }
        }
        $file->move(public_path('images/'.$fileStore), $fileName);
        $color = strtoupper($request->input('color'));
        $cars =(object)[
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),
            'color' => $color,
            'images'=>$img,
            'descrip'=> $request->input('origin').', '.$request->input('status'),
        ];

        CarsRepos::insert($cars);

        return redirect()->action('CarsController@index');
    }
     public function edit($id){
         $brands = BrandsRepos::showAllBrands();
         $cars = CarsRepos::getCarById($id);
         return view('adminauto.cars.edit',[
             'cars' => $cars[0],'brands' => $brands
         ]);
     }

     public function update($id, Request $request){
        /*dd($request->all());*/
        if ($id != $request->input('id')){
            return redirect()->action('CarsController@index');
        }
         $this->formValidation2($request)->validate();
         $brandName = BrandsRepos::getBrandName($request->input('brand'));
         foreach ($brandName as $b){
             $key[]= $b->brand_name;
         }
         $fileStore = strtolower($key[0]);
         /*if ($request->input('images')  == null){
             $img = 'images/'.$fileStore.'/'.$request->input('imagesIfNull');
         }else {
             $img = 'images/' . $fileStore . '/' . $request->input('images');
         }*/
         if ($request->file('images') != null){
             unlink(public_path($request->input('imagesIfNull')));
             $file = $request->file('images');
             $fileName = $file->getClientOriginalName();
             $file->move(public_path('images/'.$fileStore), $fileName);
             $img = 'images\\'.$fileStore.'\\'.$fileName;
         }else{
             $img = $request->input('imagesIfNull');
         }
         $color = strtoupper($request->input('color'));
         $cars =(object)[
             'id' => $request->input('id'),
             'name' => $request->input('name'),
             'brand' => $request->input('brand'),
             'price' => $request->input('price'),
             'color' => $color,
             'images'=>  $img,
             'descrip'=> $request->input('origin').', '.$request->input('status'),
         ];

        CarsRepos::update2($cars);
        return redirect()->action('CarsController@index');
     }


     public function test(Request $request){
        dd($request->all());
     }

    private function formValidation($request){
        return Validator::make($request->all(),[
           'name' => ['required'],
            'brand' => ['gt:0'],
            'price' => ['gt:0'],
            'color' => ['required'],
            'images' => ['required'],
            'origin' => ['required'],
            'status' => ['required']
        ]);
    }
    private function formValidation2($request){
        return Validator::make($request->all(),[
            'name' => ['required'],
            'brand' => ['required'],
            'price' => ['gt:0'],
            'color' => ['required'],
            'imagesIfNull' => ['required'],
            'origin' => ['required'],
            'status' => ['required']
        ]);
    }
}
