<style>
    h1 {
        color: 
#a04403;
    }
</style>

@extends('frontend.app')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="d-flex justify-content-between">
            <div>
                <h1 style="display:inline;">Subjects</h1> &nbsp;
                <h2 style="display:inline;">Library</h2>
            </div>
            <div style="width: 50px"></div>
            <div>
                <h6><i class="fas fa-university"></i>&nbsp; University of <br><span>Kathmandu</span></h6>
                <div style="height: 20px"></div>
                <i class="fas fa-question-circle" style="display:inline; font-size: 25px; color:#a04403;"></i>&nbsp; <h4 style="display:inline;border-bottom:1px solid #a04403;">Ask Us / FAQS</h4>
            </div>
        </div>
        <div><h4>Research Guides</h4></div>
        <div class="col-md-6" >
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search by book; science,math,nepali..." required/>
                    <button type="submit" >Search</button>
                </form>
        </div>
        <h6>The Library Campaign</h6>
        <hr>
    </div>
   <div class="row">
       <div class="col-md-12">
            <p class="align-items-center">We are an independent national organisation set up in 2014-{{ now()->year }} to support Friends of Library groups and to campaign for improved services in publicly funded libraries. </p>
       </div>
   </div>
   
</div> 

@endsection