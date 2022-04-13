<?php


namespace App\Repository;


use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomer(){
        $sql = 'SELECT c.* FROM customer as c order by c.cus_name ';
        return DB::select($sql);
    }

    public static function getCustomerById($id){
        $sql = 'SELECT * FROM customer WHERE cus_id = ?';

        return DB::select($sql, [$id]);
    }

    public static function update($customer){
        $sql = 'UPDATE customer set cus_name = ?, cus_dob = ?, cus_gender = ?, cus_address = ?, cus_email = ?, cus_phone = ? WHERE cus_id = ?';

        DB::update($sql, [$customer->name, $customer->dob, $customer->gender, $customer->address, $customer->email, $customer->phone, $customer->id]);
    }

    public static function delete($id){
        $sql = 'DELETE FROM customer WHERE cus_id = ? LIMIT 1';

        DB::delete($sql,[$id]);
    }
}
