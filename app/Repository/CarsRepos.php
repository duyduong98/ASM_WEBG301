<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class CarsRepos
{
    public static function showAllCarsWithBrand(){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id  order by c.car_id ';

        return DB::select($sql);
    }
    public static function get3CarMostPrice(){
        $sql = 'SELECT c.* FROM cars as c order by c.car_price DESC LIMIT 3';
        return DB::select($sql);
    }
    public static function searchByName($key){
        $sql = 'SELECT * FROM cars WHERE car_name LIKE ?';
        return DB::select($sql,['%'.$key.'%']);
    }
    public static function searchByNameWithBrand($key){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id WHERE c.car_name LIKE ? order by c.car_id ';
        return DB::select($sql,['%'.$key.'%']);
    }
    public static function getAllCarByBrand($id){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id WHERE b.brand_id = ? order by c.car_id ';
        return DB::select($sql, [$id]);
    }
    public static function getCarById($id){
        $sql = 'SELECT c.*, brand_name FROM cars as c join brand as b on c.brand_id = b.brand_id WHERE car_id = ? LIMIT 1';
        return DB::select($sql,[$id]);
    }
    public static function delete($id){
        $sql = 'DELETE FROM cars WHERE car_id = ? LIMIT 1';
        DB::delete($sql, [$id]);
    }
    public static function insert($cars){
        $sql = 'INSERT INTO cars (car_name, brand_id, car_price, car_color, car_images, car_descrip) value (?, ?, ?, ?, ?, ?)';
        $result = DB::insert($sql, [$cars->name, $cars->brand, $cars->price, $cars->color,$cars->images, $cars->descrip]);
        if ($result){
            return DB::getPdo()->lastInsertId();
        }else{
            return -1;
        }
    }

    public static function update2($cars){
        $sql = 'UPDATE cars SET car_name = ?, brand_id = ?, car_price = ?, car_color = ?, car_images = ?, car_descrip = ? WHERE car_id = ? LIMIT 1';
        DB::update($sql,[$cars->name, $cars->brand, $cars->price, $cars->color, $cars->images, $cars->descrip, $cars->id]);
    }

}
