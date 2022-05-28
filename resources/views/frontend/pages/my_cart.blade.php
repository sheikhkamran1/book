@extends('frontend.app')
@section('content')
    <div class="container-fluid py-3 mb-4 bg-warning border-top">

        <!--------------------------------------- Temporary Action/delete after test ---------------------------->

        <div class="container">
            <h5>Home / MyCart</h5>
        </div>
    </div>
    <div class="container py-5">
        <div class="card shadow product_data">
          

            @foreach ($cartitems as $item)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{$item->book->image}}"
                            alt="" height="80">
                    </div>
                    <div class="col-md-3">
                        <h3>{{$item->book->name}}</h3>
                    </div>
                    <div class="col-md-2">
                        <h5>Rs: {{$item->book->book_price}}</h5>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id" value="1">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width: 130px">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" name="quantity" class="form-control  qty-input text-center" value="{{$item->prod_qty}}">
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                    </div>


                    <div class="col-md-2  align-items-center">
                        <button class="btn btn-danger text-light delete-cart-item"><i class="far fa-trash-alt"></i>
                            Remove</button>
                    </div>
                </div>
                <hr>

            </div>
            @endforeach

            <div class="card-footer">
                <h6 style="color: black">Total Price: 700</h6>
                <a href="/checkout" class="btn btn-outline-success float-end">Proceed to checkout</a>
            </div>
        </div>
    </div>
    <!------------------------------------------- Temporary Action/delete after test -------------------------- -->
    {{-- <div class="container-fluid py-3 mb-4 bg-warning border-top">
    <div class="container">
        <h5>Home / MyCart</h5>
    </div>
</div>
    <div class="container py-5">
        <div class="card shadow product_data">
            @if ($cartitems->count() > 0)
                <div class="card-body">
                    @php $total = 0; @endphp
                    @foreach ($cartitems as $cartitems)
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ $cartitems->book->image }}"
                                    alt="" width="50px">
                            </div>
                            <div class="col-md-3">
                                <h3>{{ $cartitems->book->name }}</h3>
                            </div>
                            <div class="col-md-2">
                                <h5>Rs:{{ $cartitems->book->book_price }}</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="hidden" class="prod_id" value="{{ $cartitems->prod_id }}">
                                @if ($cartitems->book->qty > $cartitems->prod_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width: 130px">
                                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                                        <input type="text" name="quantity" class="form-control  qty-input text-center"
                                            value="{{ $cartitems->prod_qty }}">
                                        <button class="input-group-text changeQuantity increment-btn">+</button>
                                    </div>
                                    @php $total += $cartitems->book->issue_price * $cartitems->prod_qty; @endphp
                                @else
                                    <h6>Out of stock</h6>
                                @endif
                            </div>


                            <div class="col-md-2  align-items-center">
                                <button class="btn btn-danger text-light delete-cart-item"><i class="far fa-trash-alt"></i>
                                    Remove</button>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="card-footer">
                    <strong style="color: black">Total Price: {{ $total }}</strong>
                    <hr>
                    <a href="/checkout" class="btn btn-outline-success float-end">Proceed to checkout</a>
                </div>
            @else
                <h3><i class="fas fa-cart-arrow-down"></i> Cart Is Empty</h3>
                <a href="/home">Continue Shopping</a>
            @endif
        </div>
    </div> --}}
@endsection
