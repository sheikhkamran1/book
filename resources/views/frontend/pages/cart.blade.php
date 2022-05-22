@extends('frontend.app')
@section('content')
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

        .rating-css input+label {
            font-size: 60px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
                }
                .checked{
        color: yellow;
        }
    </style>
    <div class="container-fluid py-3 mb-4 bg-warning border-top">

        <div class="container">
            <h5>Collections / {{$category->name}} / {{$book->name}}</h5>
        </div>
    </div>
    <div class="container py-5">
        <div class="card p-5 product_data" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://static-01.daraz.com.np/p/88302fcdde633a7e2b15abcd1fece5d4.jpg" alt="" width="180px"
                        class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h1>{{ $book->name }}</h1>
                    <hr>
                    @if ($book->id > 0)
                        <label for="" class="badge bg-success">Instock</label>
                    @else
                        <label for="" class="badge bg-danger">Out of stock</label><br>
                    @endif <br>
                    <div class="d-flex py-2">
                        <label for="" style="font-weight: 500">borrow Price: Rs. 10</label> <br>
                        <label for="" style="font-weight: 500" class="ms-3">Book Price:
                            {{ $book->book_price }}</label>
                    </div>
                    <label for="" style="font-weight: 500">{{ $book->author }}</label>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet non earum adipisci nostrum
                        perspiciatis blanditiis similique et laborum provident enim iusto, optio impedit laboriosam eos illo
                        consectetur cum voluptas repellendus. Odio atque ad non deleniti reprehenderit quaerat maxime
                        laborum esse.</p>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ url('/cart') }}" method="post">
                                @csrf
                            <input type="hidden" value="{{ $book->id }}" class="prod_id">
                            <label for="Quantity" style="font-weight: 500">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control  qty-input text-center" value="1">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                            </form>
                        </div>
                    </div>
                 
                    <button type="submit" class="btn btn-primary addToCartBtn">Add to cart <i class="fas fa-shopping-cart"></i></button>
                    <button type="submit" class="btn btn-success">Add to Wishlist <i class="fas fa-heart"></i></button>
                </div>
            </div>
            <hr>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-center" style="width: 230px" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Rate this Product <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
                    class="fas fa-star text-warning"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ url('/rating') }}" method="post">
                        @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="rating-css">
                                <div class="star-icon">
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
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>       
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
