<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <!--Add the new slick-theme.css if you want the default styling  -->
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />

    <style>
        .fade:not(.show) {
            opacity: 1;
        }

        .fade div{
            width: 100%;
            height: calc(100vh - 96px);
        }
        .fade  img{
            object-fit: cover;
            width: 100%;
        }
        .slick-prev:before,
            .slick-next:before {
                color: #282840 !important;
            }
    </style>
</head>

<body>

    <div class="container-fluid">
        
    <div class="col-md-12 fade">
        <div><img
                src="https://d16z75xe786dp.cloudfront.net/files/2012/04/library.jpg"
                alt="">
        </div>
        <div><img
                src="https://2.bp.blogspot.com/-2s3zgBhRZ3Y/XIQBWYb14aI/AAAAAAAAH00/kBqlSexZx2M2CRltougzJ7j5F-dklLlvgCPcBGAYYCw/s1600/Quote-6.png"
                alt="">
        </div>
        <div><img
                src="https://4.imimg.com/data4/MO/NH/IMOB-15425662/asd_middle_school-2112-500x500.jpg"
                alt="">
        </div>
    </div>
    </div>


    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fade').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
            });
        });
    </script>

</body>

</html>
