<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /**********************************
 new design of course card
 ***********************************/
 .row-card-course {
             display: flex;
             flex-wrap: wrap;
             justify-content: center;
             margin: 25px auto;
         }
 
         .row-card-course .course-card>.thumbnail {
             margin-left: 10px;
             margin-right: 10px;
         }
 
         .course-card .thumbnail {
             padding: 0;
             border: none;
             text-align: center;
             border-radius: 0;
             margin: 0 auto;
             width: 180px;
             background: transparent;
             font-family: "Open Sans", sans-serif;
             font-size: 14px;
             line-height: normal;
         }
 
         .course-card .course-card-image {
             width: auto;
             height: auto;
             margin-bottom: -40px;
         }
 
         .course-card .course-card-image>a {
             display: block;
             width: 100%;
             height: 100%;
             position: relative;
         }
 
         .course-card .course-card-image>a>img {
             width: 100%;
             min-height: 20px;
         }
 
         .course-card .course-card-image>a:before {
             position: absolute;
             content: '';
             left: 0;
             top: 0;
             width: 100%;
             height: 100%;
             -moz-transition: 0.5s all;
             -o-transition: 0.5s all;
             -webkit-transition: 0.5s all;
             transition: 0.5s all;
         }
 
         .course-card .course-card-image>a:hover:before {
             background-color: rgba(0, 0, 0, 0.5);
         }
 
         .course-card .course-card-image>a:hover:after {
             opacity: 1;
         }
 
         .course-card .thumbnail .caption {
             margin: 0 auto;
             width: 120px;
             padding: 10px;
             position: relative;
             box-sizing: border-box;
             background-color: #E9E9E9;
         }
 
         .course-card .course-title {
             min-height: 40px;
         }
 
         .course-title-heading {
             margin-top: 0;
             margin-bottom: 0;
         }
 
         .course-title-heading a {
             font-size: 17px;
             font-weight: 400;
             color: #444;
             text-decoration: none;
             display: inherit;
             line-height: 20px;
         }
 
         .course-title-heading a:hover {
             color: #222;
         }
 
         .course-card .btn-group {
             width: 100%;
         }
 
         .course-card .btn-group .course-card-btn {
             background: transparent;
             border-color: transparent;
             color: #444;
             font-size: 18px;
         }
 
         .course-card .course-fav-cost {
             border-top: 1px solid #bcbcbc;
             border-bottom: 1px solid #bcbcbc;
             width: 100%;
             height: auto;
             float: left;
             padding: 4px 0;
             text-align: left;
             margin: 10px auto;
         }
 
         .course-card .course-fav-cost .course-rating-star {
             padding-left: 0;
             width: 70%;
             float: left;
         }
 
         .course-card .course-fav-cost .course-rating-star img {
             height: 10px;
             width: auto;
         }
 
         .course-card .course-fav-cost .course-rating-star .course-rating {
             unicode-bidi: bidi-override;
             direction: rtl;
         }
 
         .course-card .course-fav-cost .course-rating-star .course-rating>span>span {
             display: inline-block;
             position: relative;
             width: auto;
             color: #2c5f00;
         }
 
         .course-card .course-fav-cost .course-rating-star .course-rating>span>span.active:before,
         .course-card .course-fav-cost .course-rating-star .course-rating>span>span.active~span:before {
             content: "\2605";
             position: absolute;
         }
 
         .course-card .course-fav-cost .course-fav-price {
             padding-right: 0;
             width: 30%;
             float: left;
         }
 
         .course-card .course-fav-cost .course-fav-price .price-dollar {
             color: #2c5f00;
             font-size: 12px;
             font-weight: 700;
             margin-top: 3px;
         }
 
         .course-card .course-fav-cost .price {
             padding-right: 0;
         }
 
         .course-card .course-fav-cost .price .price-dollar {
             color: #2c5f00;
             font-size: 12px;
             font-weight: 700;
             margin-top: 3px;
         }
 
         .course-card-foot img {
             width: 35px;
             height: 35px;
             padding: 0 10px 0 0;
             box-sizing: content-box;
         }
 
         .course-card-foot-name {
             text-align: left;
         }
 
         .course-card-foot .main-name {
             color: #444;
             font-size: 13px;
             height: 100%;
             line-height: 35px;
             text-align: left;
             display: table;
         }
 
         .course-card-foot .main-name:hover,
         .course-card-foot .main-name:focus {
             text-decoration: none;
         }
 
         /* new design of course card end */
 
             {
             font-family: 'Righteous', cursive;
         }
 
         .nav-bar {
             height: 70px;
             background: #068587;
         }
 
         .brand {
             position: absolute;
             padding-left: 20px;
             float: left;
             line-height: 70px;
             text-transform: uppercase;
             font-size: 1.4em;
         }
 
         .brand a img {
             max-height: 70px;
         }
 
         .brand a,
         .brand a:visited {
             color: #ffffff;
             text-decoration: none;
         }
 
         .nav-container {
             max-width: 1000px;
             margin: 0 auto;
         }
 
         nav {
             float: right;
         }
 
         nav ul {
             list-style: none;
             margin: 0;
             padding: 0;
         }
 
         nav ul li {
             float: left;
             position: relative;
         }
 
         nav ul li a,
         nav ul li a:visited {
             display: block;
             padding: 0 20px;
             line-height: 70px;
             background: #068587;
             color: #ffffff;
             text-decoration: none;
         }
 
         nav ul li a:hover,
         nav ul li a:visited:hover {
             background: #068587;
             color: #ffffff;
         }
 
         nav ul li a:not(:only-child):after,
         nav ul li a:visited:not(:only-child):after {
             padding-left: 4px;
             content: ' ▾';
         }
 
         nav ul li ul li {
             min-width: 190px;
         }
 
         nav ul li ul li a {
             padding: 15px;
             line-height: 20px;
         }
 
         .nav-dropdown {
             position: absolute;
             display: none;
             z-index: 1;
             box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
         }
 
         .nav-mobile {
             display: none;
             position: absolute;
             top: 0;
             right: 0;
             background: #262626;
             height: 70px;
             width: 70px;
         }
 
         @media only screen and (max-width: 798px) {
             .nav-mobile {
                 display: block;
             }
 
             nav {
                 width: 100%;
                 padding: 70px 0 15px;
             }
 
             nav ul {
                 display: none;
             }
 
             nav ul li {
                 float: none;
             }
 
             nav ul li a {
                 padding: 15px;
                 line-height: 20px;
                 padding-left: 25%;
 
             }
 
             nav ul li ul li a {
                 padding-left: 30%;
             }
 
             .nav-dropdown {
                 position: static;
             }
 
             .brand a img {
                 max-height: 60px;
                 margin-top: 5px;
             }
         }
 
         @media screen and (min-width: 799px) {
             .nav-list {
                 display: block !important;
             }
         }
 
         #nav-toggle {
             position: absolute;
             left: 18px;
             top: 22px;
             cursor: pointer;
             padding: 10px 35px 16px 0px;
         }
 
         #nav-toggle span,
         #nav-toggle span:before,
         #nav-toggle span:after {
             cursor: pointer;
             border-radius: 1px;
             height: 5px;
             width: 35px;
             background: #ffffff;
             position: absolute;
             display: block;
             content: '';
             transition: all 300ms ease-in-out;
         }
 
         #nav-toggle span:before {
             top: -10px;
         }
 
         #nav-toggle span:after {
             bottom: -10px;
         }
 
         #nav-toggle.active span {
             background-color: transparent;
         }
 
         #nav-toggle.active span:before,
         #nav-toggle.active span:after {
             top: 0;
         }
 
         #nav-toggle.active span:before {
             transform: rotate(45deg);
         }
 
         #nav-toggle.active span:after {
             transform: rotate(-45deg);
         }
 
         article {
             max-width: 1000px;
             margin: 0 auto;
             padding: 10px;
         }
 
 
         body {
             background-color: #d6d6d6;
         }
 
         .wrap {
             margin: 50px auto 0 auto;
             width: 100%;
             display: flex;
             align-items: space-around;
             max-width: 1000px;
         }
 
         .fade:not(.show) {
         opacity:1;
         }
 
         .card {
             width: 380px;
             height: 380px;
             margin: 25px;
             background-color: #F5FCFF;
             display: inline-block;
             background-size: cover;
             position: relative;
             cursor: pointer;
             transition: all 0.4s ease-out;
             box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.44);
             overflow: hidden;
             color: white;
             font-family: 'Roboto';
 
         }
 
         .card img {
             height: 100%;
             width: 100%;
             position: absolute;
             top: 0;
             left: 0;
             z-index: 0;
             transition: all 0.4s ease-out;
         }
 
         .card .text {
             position: absolute;
             padding: 30px;
             height: calc(100% - 60px);
         }
 
         .card h1 {
 
             font-weight: 300;
             margin: 0;
             text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
         }
 
         .card h2 {
             font-weight: 100;
             margin: 20px 0 0 0;
             font-style: italic;
             transform: translateX(200px);
         }
 
         .card p {
             font-weight: 300;
             margin: 20px 0 0 0;
             line-height: 25px;
             transform: translateX(-200px);
             transition-delay: 0.2s;
         }
 
         .animate-text {
             opacity: 0;
             transition: all 0.6s ease-in-out;
         }
 
         .card:hover {
             color: #000;
             box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.64);
             transform: scale(1.05);
         }
 
         .card:hover img {
             opacity: 0.2;
         }
 
         .card:hover .animate-text {
             transform: translateX(0);
             opacity: 1;
         }
 
         .dots {
             position: absolute;
             bottom: 20px;
             right: 30px;
             margin: 0 auto;
             width: 30px;
             height: 30px;
             color: currentColor;
             display: flex;
             flex-direction: column;
             align-items: center;
             justify-content: space-around;
         }
 
         .dots span {
             width: 5px;
             height: 5px;
             background-color: currentColor;
             border-radius: 50%;
             display: block;
             opacity: 0;
             transition: transform 0.4s ease-out, opacity 0.5s ease;
             transform: translateY(30px);
         }
 
         .card:hover span {
             opacity: 1;
             transform: translateY(0px);
         }
 
         .dots span:nth-child(1) {
             transition-delay: 0.05s;
         }
 
         .dots span:nth-child(2) {
             transition-delay: 0.1s;
         }
 
         .dots span:nth-child(3) {
             transition-delay: 0.15s;
         }
 
 
         @media (max-width: 1000px) {
             .wrap {
                 flex-direction: column;
                 width: 400px;
             }
         }
 
         .credit a {
             text-decoration: none;
             color: #000;
             font-weight: 800;
         }
 
         .credit {
             text-align: center;
             font-family: Verdana, Geneva, Tahoma, sans-serif;
         }
 
 </style>
</head>

<body>
    
    <div class="container py-3 ">
        <div class="card-header my-3 bg-light">
        <h3>Popular Books</h3>
        <p>In Particular, the explicit examination of primary element</p>
        </div>

        <div class="container regular" style="background-color: white">
            @foreach ($rating as $rating)
            <div class="row-card-course">
                
                <div class="course-card">
                    <div class="thumbnail">
                        <div class="course-card-image">
                            <a href="/cart">
                                <img class="not-img img-res"
                                    src="https://asmitapublication.com/wp-content/uploads/2020/10/front-principles-of-physics-ASMITA-330x452.jpg">
                                
                            </a>
                        </div>

                        <div class="caption mt-5" style="width: 100%;">
                            <div class="course-title">
                                <h3 class="course-title-heading">
                                    <a class="not-a" href="/cart">{{$rating->book_id}}</a>
                                </h3>
                            </div>
                            <div class="course-fav-cost">
                                <div class="course-rating-star">
                                    <small>Rating</small>
                                    <br>
                                    <div class="course-rating">
                                        <span><span> ☆</span><span class="active"> ☆</span><span>
                                                ☆</span></span>
                                    </div>
                                </div>
                                <div class="course-fav-price ">
                                    <small>Price</small>
                                    <div class="price-dollar">₹01234.50</div>
                                </div>
                                
                            </div>
                            {{-- <a href="" class="btn btn-primary btn-pill">Add to Cart</a> --}}

                        </div>
                    </div>
                </div>
               
            </div>
            @endforeach
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            // alert("hELLO");
            $(".regular").slick({
                dots: true,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>
