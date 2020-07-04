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
    public function show($id)
    {
        $item = ItemModel::find_by_id($id);
        return view('items.show', compact('item'));
    }
    public function edit($id)
    {
        $item = ItemModel::find_by_id($id);
        return view('items.edit', compact('item'));
    }
    public function update($id, Request $request)
    {
        $item = ItemModel::update($id, $request->all());
        return redirect('/items');
    }
    public function destroy($id)
    {
        $deleted = ItemModel::destroy($id);
        return redirect('/items');
    }
}
