@extends('frontend.app')
@section('content')
<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300; */
 /* .container {
	 position: absolute;
	 width: 100%;
	 height: 100vh;
	 background: #2c302d;
} */
 .card {
	 /* width: 60%;
	 height: 80%;
	 max-height: 300px; */
	 /* padding: auto; */
	 text-align: center;
	 background:  #f8f9fa;
	 border-radius: 10px;
	 box-shadow: 10px 10px 10px red, -10px -10px -10px red;
}
 
 .card__content {
	 width: 95%;
	 height: 95%;
	 background:  #f1f1f1;
	 margin: 10px auto;
	 border-radius: 5px;
	 padding: 20px;
	 cursor: pointer;
	 /* box-shadow: 16px 16px 44px #0a0a0a, -16px -16px 44px #282a28; */
	 transition: 0.3s all ease-in-out;
}
 .card__content:hover {
	 margin-top: -10px;
}
 .card__header {
	 text-transform: uppercase;
	 font-size: 20px;
	 margin: 40px auto;
}
 .card__button {
	 padding: 10px;
	 border-radius: 50px;
	 background: #1f75c4;
	 color: white;
	 font-weight: bold;
	 cursor: pointer;
	 border: none;
	 /* margin: 50px auto; */
}
 
.card {
  
  width: 240px;
  height: 320px;
  background-color: white;
  border-radius: 10px;
}
address{
    font-size: 15px;
}
address a{
    color: black;
    text-decoration: none
}
address a:hover{
    color: black;
}
</style>
<div class="container-fluid"  style="background-color: #f8f9fa">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Contact Us</h1>
            <p style="font-weight: 500">Have any questions? We'd loved to hear you.</p><hr>
            <br>
            <h6 style="font-size: 20px;color: black">Kathmandu,Darbarmarg,Nepal</h6>
            <address><a href="tel:+9807061070"><strong>phone no:</strong> 9807061070</a><br>
                <span><a href="mailto:Kamran123@gmail.com"><strong>Email:</strong> Kamran123@gmail.com</a></span>
            </address>
            <div class="col-md-12">
                 @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                <form action="/contacts_store" method="post">
                    @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" required>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="email">Email Address</label>
                                    <input id="email" class="form-control" type="text" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Message</label>
                            <textarea id="description" class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-end mt-3" style="width:150px">Send</button>
                </form>
            </div>
            </div>
    
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                    <h4>How Can We Help?</h4>
                    <p style="font-weight: 500">Please Select the topic below related to your inquiry.If you dont find what you need,fill out our contact form.</p>
                    </div>
                <div class="col-md-12">
                    <img src="images/contact.png" alt="" width="80%">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #f8f9fa"> 
<div class="container ">
    <div class="row justify-content-center">
        <div class="card col-md-4 align-items-center justify-content-center m-3">
            <div class="card__content" style="border-top-style: solid; border-top-width: 8px; border-top-color: coral">
              <h3 class="card__header">Message</h3>
              <p class="card__info">Are You interested in our latest news or working on a library story and need to get in touch?</p>
              <button class="card__button" style=" position: relative;
              bottom: -1;">Read now</button>
            </div>
          </div>
          <div class="card col-md-4 align-items-center justify-content-center m-3" >
            <div class="card__content" style="border-top-style: solid; border-top-width: 8px; border-top-color: #198754">
              <h3 class="card__header">Sales</h3>
              <p class="card__info">Get in touch with our sales team to see how we can work together.</p>
              <button class="card__button" style=" position: relative;
              bottom: -20;">Read now</button>
            </div>
          </div> 
          <div class="card col-md-4 align-items-center justify-content-center m-3">
            <div class="card__content" style="border-top-style: solid; border-top-width: 8px; border-top-color: #0d6efd">
              <h3 class="card__header">Help & Support</h3>
              <p class="card__info">Our support team is spread across the globe to give you answer fast.</p>
              <button class="card__button">Read now</button>
            </div>
          </div>
    </div>
</div>
</div>


@endsection