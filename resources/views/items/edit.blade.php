@extends('adminlte.master')
@section('content')
<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Items</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" action="/items/{{$item->id}}" method="post">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Item's name" value="{{$item->name}}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{$item->description}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price " value="{{$item->price}}">
              </div>
              <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock " value="{{$item->stock}}">
              </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </form>
      </div>
</div>
@endsection