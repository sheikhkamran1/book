@extends('frontend.app')
@section('content')
    <div class="container-fluid" style="background-color: #fafafa">
        <div class="container py-1">
        <div class="card p-5">
            <h1 class="text-primary">Book Details</h1>        
        <div class="row py-3">
            <div class="col-md-12 d-flex">
                <div style=""><img src="images/english.png" alt=""></div>
                    
                    <div class="ms-5">
                        <h3>English</h3>
                        <p><strong>Author:</strong> Stephen Hawking</p>
                        <p><strong>Publication:</strong> Stephen Hawking</p>
                        <p><strong>Pages:</strong> 300pg</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat maiores quasi quidem corporis tenetur ab expedita soluta! Placeat ipsam labore soluta nostrum id cumque, eius harum natus maxime tempore sequi nobis odit impedit expedita aspernatur voluptate qui animi libero dolor. Provident tenetur doloremque molestiae nesciunt, impedit ab labore soluta temporibus!</p>
                        <p><strong>Rent Price:</strong> <span style="font-size: 30px">NRS 5/Day</span></p>
                    <button class="btn btn-primary">Reserve Now</button>

                    </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
            <h3 >About the Project</h3>
            <p>Just like Wikipedia, you can contribute new information or corrections to the catalog. You can browse by subjects, authors or lists members have created. If you love books, why not help build a library?</p>        

            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #f8f9fa">
        <div class="container py-5 mt-3" >
            <h3 class="text-primary">Popular Books</h3>
            <p>In Particular, the explicit examination of primary element</p>               
        
            <div class="regular" style="z-index:100;height:">
        
                @foreach ($category as $category)
                <div class="col-md-4 ">
                    <div class="card ms-3" style="width: auto;">
                         <img src="{{$category->image}}" class="card-img-top" alt="..." style="height: 280px;width:auto">
        
                <div class="">
                    {{-- <h5 class="">{{$category->name}}</h5> --}}
                    <a href="/borrow_book" class="btn btn-primary mt-1" style="width: 100%">Borrow</a>
                </div>
                     </div>
                </div>
                @endforeach
            
            </div>
          </div>
    </div>
@endsection