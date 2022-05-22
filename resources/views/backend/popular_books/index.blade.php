@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="popular_books/create" class="btn btn-primary">Add Popular_books</a>
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

                        @foreach ($popular_books as $popular_books)
                        <tr>
                         <td>{{$popular_books->id}}</td>
                         <td><img src=" {{ $popular_books->image }} " width="40" alt=""></td>
                         <td>{{$popular_books->name}}</td>
                         <td>{{$popular_books->category->name}}</td>
                         <td>{!!Str::limit($popular_books->description,40)!!}</td>
                         <td>
                             <a href="popular_books/{{$popular_books->id}}/edit" class="badge bg-primary">Edit</a>
                             <a href="popular_books/{{$popular_books->id}}"  class="badge bg-danger">Delete</a>
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