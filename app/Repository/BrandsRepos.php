<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class BrandsRepos
{
    public static function showAllBrands(){
        $sql = 'Select b.* FROM brand as b order by b.brand_id';
        return DB::select($sql);
    }
    public static function getBrandName($id){
        $sql = 'SELECT brand_name FROM brand WHERE brand_id = ? LIMIT 1';
        return DB::select($sql,[$id]);
    }


}
