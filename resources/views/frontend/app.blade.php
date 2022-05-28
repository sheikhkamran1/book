<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Resitration System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- slick -->
    {{-- <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <!--Add the new slick-theme.css if you want the default styling  -->
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/> --}}

    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="style.css">  --}}
    <style>
      body{
        overflow-x: hidden
      }
   
    </style>
</head>
<body>
        {{-- <!-- header --> --}}
        @include('frontend.components.header')
        <!-- Mian content -->
        @yield('content')
        <!-- Footer -->
        @include('frontend.components.footer')
  
        

        


<script>
 ction.jsJavaScript
/** code by webdevtrick ( https://webdevtrick.com ) **/
(function($) { 
  $(function() { 
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); 
})(jQuery);
</script>

{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script  src="function.js"></script> --}}

    
<script>
  // ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});
</script>

<!----------------------------  Add To Cart ------------------------------------->
<script>
   $(document).ready(function(){

    $('.addToCartBtn').click(function (e) { 
      e.preventDefault();
      var book_id = $(this).closest('.product_data').find('.prod_id').val();
      var book_qty = $(this).closest('.product_data').find('.qty-input').val();
      // alert(book_id);
      // alert(book_qty);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
        type: "POST",
        url: "/add-to-cart",
        // crossDomain:true,
        data: {
          'book_id': book_id,
          'book_qty': book_qty,
        },
        
        success: function (response) {
          alert(response.status);
        }
      });

    });

    $('.increment-btn').click(function(e){
      e.preventDefault();

      // var inc_value = $('.qty-input').val();
      var inc_value = $(this).closest('.product_data').find('.qty-input').val();
      var value = parseInt(inc_value,10);
      value = isNaN(value) ? 0 : value;
      if(value < 10)
      {
        value++;
        // $('.qty-input').val(value)
        $(this).closest('.product_data').find('.qty-input').val(value);
      }
    });

    $('.decrement-btn').click(function(e){
      e.preventDefault();

      // var dec_value = $('.qty-input').val();
      var dec_value = $(this).closest('.product_data').find('.qty-input').val();
      var value = parseInt(dec_value,0);
      value = isNaN(value) ? 0 : value;
      if(value > 1)
      {
        value--;
        // $('.qty-input').val(value)
        $(this).closest('.product_data').find('.qty-input').val(value);
      }
    });

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $('.delete-cart-item').click(function (e) { 
      e.preventDefault();

      var prod_id = $(this).closest('.product_data').find('.prod_id').val();
      $.ajax({
             method: "POST",
             url: "delete-cart-item",
             data: {
                 'prod_id':prod_id,
             },
             success: function (response) {
               swal("",response.status, "Success")
                 window.location.reload();
             }
         });
    });

    $('.changeQuantity').click(function (e) { 
      e.preventDefault();
      var prod_id = $(this).closest('.product_data').find('.prod_id').val();
      var qty = $(this).closest('.product_data').find('.qty-input').val();
      data = {
        'prod_id':prod_id,
        'prod_qty':qty,
      }
      $.ajax({
        type: "POST",
        url: "update-cart",
        data: data,
        dataType: "dataType",
        success: function (response) {
          // alert(response)
          window.location.reload();
        }
      });
    });

  });
</script>

{{-- <script type="text/javascript" src="jquery-3.3.1.js"></script> --}}
</body>
</html>