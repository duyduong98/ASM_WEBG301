<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\BrandsRepos;
use App\Repository\CarsRepos;
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
        $this->formValidation2($request)->validate();


        if ($request->file('images') !=null){
            unlink(public_path($request->input('imagesIfNull')));
            $file = $request->file('images');
            $filename = $file->getClientOriginalName();
            $img = 'images\\'.$filename;
            $file->move(public_path('images'), $filename);
        }else{
            $img = $request->input('imagesIfNull');
        }

        $brand = (object)[
            'brand_id' => $request->input('id'),
            'brand_name' => $request->input('name'),
            'brand_logo' => $img,
            'brand_descrip'=>$request->input('descrip'),
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
        $cars = CarsRepos::getAllCarByBrand($brand_id);
        if ($cars != null){
            return redirect()->back()->withErrors("Delete all car from this brand before you delete this brand");
        }
        BrandsRepos::delete($brand_id);
        unlink(public_path($request->input('images')));
        return redirect()->action('BrandsController@index');
    }

    public function create(){
        return view('adminauto.brands.add',[
            'brands' =>(object)[
                'brand_id' => 0,
                'brand_name' => '',
                'brand_logo' => '\\',
                'brand_descrip'=>''
            ],
        ]);
    }

    public function store(Request $request){
       /* dd($request->all());*/
        $this->formValidation($request)->validate();

        $file = $request->file('images');
        $fileName = $file->getClientOriginalName();
        $img = 'images\\'.$fileName;
        $cmpImages = BrandsRepos::getImages();
        foreach ($cmpImages as $c){
            if ($img == $c->brand_logo){
                return redirect()->back()->withErrors('Images belong another Brand')->withInput();
            }
        }
        $file->move(public_path('images'), $fileName);
        $brands = (object)[
            'name' => $request->input('name'),
            'images' => $img,
            'descrip' => $request->input('descrip'),
        ];

        BrandsRepos::insert($brands);
        return redirect()->action('BrandsController@index');
    }


    private function formValidation($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required', 'max:20'],
                'descrip' => ['required', 'max:1000'],
                'images' => ['required','max:43']
            ]
        );
    }

    private function formValidation2($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required', 'max:20'],
                'descrip' => ['required', 'max:1000'],
                'images'=> ['max:43'],
                'imagesIfNull' => ['required','max:50']
            ]
        );
    }
}
