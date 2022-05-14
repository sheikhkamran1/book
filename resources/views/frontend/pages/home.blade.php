@extends('frontend.app')
@section('content')
  
<!--------------------------------- card ------------------------------------->
@include('frontend.components.top_searchbar')
<!--------------------------------- card ends-------------------------------------> 
    
 <!--------------------------------- card ------------------------------------->
@include('frontend.components.carasoul')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- card ------------------------------------->
@include('frontend.components.popular_book')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- card ------------------------------------->
@include('frontend.components.category')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- card ------------------------------------->
@include('frontend.components.other_books')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- card ------------------------------------->
@include('frontend.components.story_books')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- card ------------------------------------->
@include('frontend.components.nobel_books')
<!--------------------------------- card ends-------------------------------------> 

<!--------------------------------- introduction ------------------------------------->
@include('frontend.components.introduction')
<!--------------------------------- introduction ends------------------------------------->

<!--------------------------------- card ------------------------------------->
@include('frontend.components.card')
<!--------------------------------- card ends------------------------------------->

<!--------------------------------- Parallex ------------------------------------->
@include('frontend.components.parallex')
<!--------------------------------- Parallex ends------------------------------------->

<!--------------------------------- card ------------------------------------->
@include('frontend.components.about')
<!--------------------------------- card ends------------------------------------->

@endsection