<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class CarsRepos
{
    public static function showAllCarsWithBrand(){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id  order by c.car_id ';

        return DB::select($sql);
    }
    public static function getAllCarByBrand($id){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id WHERE b.brand_id = ? order by c.car_id ';
        return DB::select($sql, [$id]);
    }

}
