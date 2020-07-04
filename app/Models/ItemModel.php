<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ItemModel
{
    public static function get_all()
    {
        //untuk mendapatkan seluruh data
        $items = DB::table('items')->get();
        return $items;
    }
    public static function save($data)
    //untuk menyimpan data ditable items


    {
        //sebelum disimpan bawaan _token kita hilangkan dulu
        unset($data["_token"]);
        $new_item = DB::table('items')->insert($data);
        return $new_item;
    }
}
