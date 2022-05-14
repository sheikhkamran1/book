@extends('frontend.app')
<style>
    /* rating */
.rating-css div {
    color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

/* End of Star Rating */
</style>
@section('content')
    <div class="container py-5 ">
        <div class="card p-5 ">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://static-01.daraz.com.np/p/88302fcdde633a7e2b15abcd1fece5d4.jpg" alt="" width="180px">
                </div>
                <div class="col-md-8">
                    <h1>Physics</h1><hr>
                    <strong>borrow: Rs. 10</strong><br>
                    <button class="badge bg-success">Instock</button><br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet non earum adipisci nostrum perspiciatis blanditiis similique et laborum provident enim iusto, optio impedit laboriosam eos illo consectetur cum voluptas repellendus. Odio atque ad non deleniti reprehenderit quaerat maxime laborum esse.</p><hr>
                    <button type="submit" class="btn btn-primary">Borrow</button>
                    <button type="submit" class="btn btn-success">Add to Wishlist &nbsp;<span style="color:white !important;font-size:15px;">❤</span></button>
                </div>
            </div><hr>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-------------------------------- Important ------------------------------>
  @php $ratenum = number_format($rating_value) @endphp
  <div class="rating">
      @for($i = 1; $i<= $ratenum; $i++)
      <i class="fa fa-star checked"></i>
      @endfor
      @for($j = $ratenum+1; $j <= 5; $j++)
      <i class="fa fa-star "></i>
      @endfor
      <span>
          @if( $ratings->count() > 0 )
          {{ $ratings->count() }} Ratings
          @else
          No Rating
          @endif
      </span>
  </div>
<!-------------------------------- Important ------------------------------>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          
        <form action="{{ url('/add-rating')}}" method="post">
            @csrf
            <input type="hidden" name="book_id" value="{{ $book->id }}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rate {{ $book->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    @if($user_rating)
                    @for($i = 1; $i<= $user_rating->stars_rated; $i++)
                      <input type="radio" value="{{$i}}" name="product_rating"  id="rating{{$i}}">
                      <label for="rating{{$i}}" class="fa fa-star "></label>
                    @endfor
                    @for($j = $user_rating->stars_rated+1; $j <= 5; $j++)
                    input type="radio" value="{{$j}}" name="product_rating" checked id="rating{{$j}}">
                      <label for="rating{{$j}}" class="fa fa-star "></label>
                    @endfor
  
                   
                    @else
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Rate this Product</button>
        </div>
    </form>
      </div>
    </div>
  </div>
        </div>
    </div>
@endsection