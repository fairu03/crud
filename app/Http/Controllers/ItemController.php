<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function create() //fungsi untuk mengcreate data
    {
        return view('items.form');
    }
    public function store(Request $request) //fungsi untuk simpan data
    {
        $new_items = ItemModel::save($request->all());

        return redirect('/items');
    }
    public function index() //fungsi menampilkan data
    {
        $items = ItemModel::get_all();

        return view('items.index', compact('items'));
    }
}
