@extends('frontend.app')
@section('content')
    <style>
        .checkout-form label {
            font-size: 18px;
            font-weight: 500;
        }
        .ordered-data td{
            font-size: 16px;
            font-weight: 500;
        }

    </style>
    <div class="container-fluid py-3 mb-4 bg-warning border-top">
        <div class="container">
            <h5>Collections / Checkout</h5>
        </div>
    </div>

 <div class="container-fluid" style="background-color: #f8f9fa">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <div class="card-body">
                        <h6 style="color: black;font-size: 25px;font-weight: 600;">Product Details</h6><hr>
                            <div class="row checkout-form">
                                <div class="col-md-12 py-2">
                                    <form action="/place_order" method="post">
                                        @csrf
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input id="name" class="form-control" type="text" name="name"
                                            placeholder="Your Name" required>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control" type="text" name="email"
                                            placeholder="Your Email" required>
                                    </div>
                               
                                
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input id="number" class="form-control" type="text" name="number"
                                            placeholder="Your Numbar" required>
                                    </div>
                               
                               
                                    <div class="form-group">
                                        <label for="order_address">Address</label>
                                        <input id="order_address" class="form-control" type="text" name="order_address"
                                            placeholder="Your address" required>
                                    </div>
                            
                                
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input id="country" class="form-control" type="text" name="country"
                                            placeholder="Your address" required>
                                    </div>
                               
                                
                                    <div class="form-group">
                                        <label for="pin_code">Pin Code</label>
                                        <input id="pin_code" class="form-control" type="text" name="pin_code"
                                            placeholder="Your address" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end mt-3" style="width:150px">Place
                                        Order</button>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-md-6">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="card-body">
                            <h5>Your Ordered Details</h5>
                            <hr>
                            <table class="table table-striped table-bordered">
                               <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                               </tr>

                               <tr class="ordered-data">
                                   <td>Physics</td>
                                   <td>1</td>
                                   <td>700</td>
                               </tr>
                               
                            </table>
                            <h5 class="text-end">Total Price: Rs.700</h5>
                        </div>
                    </div>
            </div>
           
    </div>
    </div>
 </div>
@endsection
