<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function login($username){
        $sql = 'SELECT password FROM admin where user_name = ? LIMIT 1';
        return DB::select($sql,[$username]);
    }
    public static function getAllAdmin(){
        $sql = 'SELECT user_name, email, address, contact FROM admin as c order by c.user_name ';
        return DB::select($sql);
    }

    public static function getAdminByName($username){
        $sql = 'SELECT user_name, email, address, contact FROM admin WHERE user_name = ?';

        return DB::select($sql, [$username]);
    }

    public static function update($admin){
        $sql = 'UPDATE admin set email = ?, address = ?, contact = ? WHERE user_name = ?';

        DB::update($sql, [$admin->email, $admin->address, $admin->contact, $admin->username]);
    }

    public static function delete($username){
        $sql = 'DELETE FROM admin WHERE user_name = ? LIMIT 1';

        DB::delete($sql,[$username]);
    }

}
