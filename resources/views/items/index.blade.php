@extends('adminlte.master');
@section('content')
<h1>
    Data Items
</h1>
<br>
<a href="/items/create" class="btn btn-primary mb-2">
Creat New Item
</a>
<br>
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">#</th>
        <th>Name</th>
        <th>Description</th>
        <th style="width: 40px">Price</th>
        <th style="width: 40px">Stock</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($items as $key => $item)
        <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->stock}}</td>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
        </td>
        </tr>
    @endforeach
         
    </tbody>
  </table>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
    </ul>
  </div>
    
@endsection