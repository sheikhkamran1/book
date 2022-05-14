<style>
     .card-service {
            width: 300px;
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

        .card-service img {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            transition: all 0.4s ease-out;
        }

        .card-service .text {
            position: absolute;
            padding: 30px;
            height: calc(100% - 60px);
        }

        .card-service h1 {

            font-weight: 300;
            margin: 0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .card-service h2 {
            font-weight: 100;
            margin: 20px 0 0 0;
            font-style: italic;
            transform: translateX(200px);
        }

        .card-service p {
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

        .card-service:hover {
            color: #000;
            box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.64);
            transform: scale(1.05);
        }

        .card-service:hover img {
            opacity: 0.2;
        }

        .card-service:hover .animate-text {
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

        .card-service:hover span {
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
<div class="container pb-5">
    <div class="wrap">
        <div class="card-service">
            <img
                src='https://1.bp.blogspot.com/-SdVsE8HMbjo/XIP9E-v_D9I/AAAAAAAAH0o/jkCM_J069LQFdIjvDscBkCFH0cL0CxaPACPcBGAYYCw/s1600/Quote-5.png' />
            <div class="text">
                <h1>Reading</h1>
                <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                <p class="animate-text">Open Library is an open, editable library catalog, building towards a web
                    page for every book ever published. </p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="card-service">
            <img src='https://agnishamak.com/wp-content/uploads/2021/02/service.jpg' />
            <div class="text">
                <h1>Services</h1>
                <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork
                    chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="card-service">
            <img src='https://cdn.pixabay.com/photo/2016/11/06/05/36/lake-1802337__340.jpg' />
            <div class="text">
                <h1>About Us</h1>
                <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
                <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork
                    chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
   </div>
  