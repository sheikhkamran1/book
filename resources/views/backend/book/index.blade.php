@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="book/create" class="btn btn-primary">Add Book</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>category_Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($book as $book)
                        <tr>
                         <td>{{$book->id}}</td>
                         <td><img src=" {{ $book->image }} " width="40" alt=""></td>
                         <td>{{$book->name}}</td>
                         <td>{{$book->book_price}}</td>
                         <td>{{$book->category->name}}</td>
                         <td>{!!Str::limit($book->description,40)!!}</td>
                         <td>
                             <a href="book/{{$book->id}}/edit" class="badge bg-primary">Edit</a>
                             <a href="book/{{$book->id}}"  class="badge bg-danger">Delete</a>
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