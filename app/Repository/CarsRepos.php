<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class CarsRepos
{
    public static function showAllCars(){
        $sql = 'SELECT c.* FROM cars as c order by c.car_name ';

       return DB::select($sql);
    }

    public static function getAllCarByBrand($id){
        $sql = 'SELECT c.* FROM cars as c WHERE brand_id = ?';
        return DB::select($sql, [$id]);
    }
}
