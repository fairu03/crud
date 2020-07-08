<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ItemModel
{
    protected $table = "items";
    protected $guarded = [];

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
    public static function find_by_id($id)
    {
        $item = DB::table('items')->where('id', $id)->first();
        return $item;
    }
    public static function update($id, $request)
    {
        $item = DB::table('items')
            ->where('id', $id)
            ->update([
                'name' => $request["name"],
                'description' => $request["description"],
                'price' => $request["price"],
                'stock' => $request["stock"],
                'category_id' => $request["category_id"]

            ]);
        return $item;
    }
    public static function destroy($id)
    {
        $deleted = DB::table('items')
            ->where('id', $id)
            ->delete();
        return $deleted;
    }
}
