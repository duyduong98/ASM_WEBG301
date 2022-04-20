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
    public static function showBrandById2($id){
        $sql = 'SELECT *  FROM brand WHERE brand_id = ? LIMIT 1';
        return DB::select($sql,[$id]);
    }
    public static function delete($id){
        $sql = 'DELETE FROM brand WHERE brand_id = ? LIMIT 1';
        DB::delete($sql, [$id]);
    }
    public static function update($brand){
        $sql = 'UPDATE brand set brand_name = ?, brand_logo = ?, brand_descrip = ? WHERE brand_id = ?';

        DB::update($sql, [$brand->brand_name, $brand->brand_logo, $brand->brand_descrip, $brand->brand_id,]);
    }
    public static function insert($brands){
        $sql = 'INSERT INTO brand (brand_name, brand_logo, brand_descrip) value (?, ?, ?)';
        $result = DB::insert($sql, [$brands->name, $brands->images, $brands->descrip]);
        if ($result){
            return DB::getPdo()->lastInsertId();
        }else{
            return -1;
        }
    }

}
