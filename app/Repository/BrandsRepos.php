<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class BrandsRepos
{
    public static function showAllBrands(){
        $sql = 'Select b.* FROM brand as b order by b.brand_id';
        return DB::select($sql);
    }
}
