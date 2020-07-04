@extends('adminlte.master')
@section('content')
    <h1>ini adalaha menu show item</h1>
    <div class="ml-3 mt-3">
        <h3>Detail Item</h3>
    <p>item's name {{$item->name}}</p>
    <p>item's deskripsi {{$item->description}}</p>
    <p>item's harga {{$item->price}}</p>
    <p>item's stok {{$item->stock}}</p>
    </div>
@endsection