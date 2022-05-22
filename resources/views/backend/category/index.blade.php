@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="form-group">
                    <label for="">Search</label>
                    <input id="" class="form-control" type="search" name="search" placeholder="search category">
                </div>
                <button class="tn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/category/create" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        
                       
                       @foreach ($category as $category)
                       <tr>
                           <td>{{$category->id}}</td>
                        <td> {{ $category->name }} </td>

                        <td><img src=" {{ asset($category->image) }} " width="50" alt=""></td>
                        <td>
                            <a href="category/{{$category->id}}/edit" class="badge bg-primary">Edit</a>
                            <a href="category/{{$category->id}}"  class="badge bg-danger">Delete</a>
                        </td>
                    </tr>
                       @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
