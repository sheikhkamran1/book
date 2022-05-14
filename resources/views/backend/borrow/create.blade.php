@extends('backend.app')
 
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="/borrow" class="btn btn-primary m-1">Back</a>
                  </div>
                  <div class="card-body">
                      @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                    <form action="/borrow" method="post">
                        @csrf
                
                        <div class="form-group">
                            <label for="name">User ID</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="eg.Apple" value="{{ old('name') }}">
                        </div>
                
                        <div class="form-group">
                            <label for="date">Date *</label>
                            <input id="date" class="form-control" type="text" name="date" placeholder="dharan" value="{{ old('date') }}"> 
                        </div>

                        <div class="form-group">
                            <label for="user_id">UserID</label>
                            <select id="user_id" class="form-control" name="user_id">
                                <option>Text</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount">Total Amount</label>
                            <input id="amount" class="form-control" type="text" name="amount">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection