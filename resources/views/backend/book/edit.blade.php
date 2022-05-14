@extends('backend.app')
 
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="/book" class="btn btn-primary m-1">Back</a>
                  </div>
                  <div class="card-body">
                      @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                    <form action="/book" method="post">
                        @csrf
                
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="eg.Physics" value="{{ old('name') }}">
                        </div>
                
                       <div class="form-group">
                           <label for="author">Author</label>
                           <input id="author" class="form-control" type="text" name="author" placeholder="Micheal H.heart" value="{{old('author')}}">
                       </div>

                       <div class="form-group">
                           <label for="publication">Publication</label>
                           <input id="publication" class="form-control" type="text" name="publication" placeholder="Asmita" value="{{old('publication')}}">
                       </div>

                       <div class="form-group">
                           <label for="pages">Book pages</label>
                           <input id="pages" class="form-control" type="text" name="pages" placeholder="200pg">
                       </div>

                       <div class="form-group">
                           <label for="book_price">Book Price</label>
                           <input id="book_price" class="form-control" type="text" name="book_price">
                       </div>

                       <div class="form-group">
                        <label for="issue_price">Issue Price</label>
                        <input id="issue_price" class="form-control" type="text" name="issue_price" placeholder="Rs.10">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select id="category_id" class="form-control" name="category_id">
                            @foreach ($category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection