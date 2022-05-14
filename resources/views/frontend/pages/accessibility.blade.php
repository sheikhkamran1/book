<style>
   .accessibility h3{
        color: #282828
    }
</style>

@extends('frontend.app')
@section('content')
<div class="container-fluid py-4" style="background-color: #f8f9fa">
    <div class="accessibility container">
        <h3 style="font-weight: 500">Accessibility</h3>
        <div class="row justify-content-between">

            <div class="col-md-4"><img src="images/blind.jpg" alt="" width="70%"></div>
            <div class="col-md-4"><img src="images/man.jpg" alt="" width="70%"></div>
            <div class="col-md-4"><img src="images/readingmachine.jpg" alt="" width="70%"></div>
           
            <p>The Kathmandu Library strives to ensure that everyone is welcome and has access to the full range of information, services, and programs that are offered in our neighborhood branches and research libraries.</p>
        </div><hr>
    
        <div class="row">
            <div class="col-md-12">
                <h3 style="font-weight: 350; font-weight: 500">Accessible Resources</h3>
                    <p>For more information or for an Buying any books, please email <a href="" style="text-decoration: underline; color: 
                        #212529">kamransheikh123@gmail.com</a> To learn more about the accessibility of our library and and borrowing books, see our Web & Mobile Accessibility Policy.</p>
            </div>
        </div>  
        
        <div class="row">
            
                <div class="col-md-6">
                    <h3 style="font-weight: 350">Print Disabilities or Visual Impairment </h3>
                        <ul>
                            <li> Talking Books, Bookshare</li>
                            <li> Technology workshops, braille study groups, and more</li>
                        </ul>
                </div>
            
                <div class="col-md-6">
                    <h3 style="font-weight: 350">Learning, Cognitive, or Developmental Disabilities </h3>
                        <ul>
                            <li> Talking Books, Bookshare</li>
                            <li> Technology workshops, braille study groups, and more</li>
                        </ul>
                </div>
        </div>
    
        <div class="row">
            
            <div class="col-md-6">
                <h3 style="font-weight: 350">Deaf or Hard of Hearing</h3>
                    <ul>
                        <li> ASL interpretation and CART real-time captioning</li>
                        <li> Assistive listening devices, hearing loops</li>
                        <li> Captioned videos and DVDs</li>
                    </ul>
            </div>
        
            <div class="col-md-6">
                <h3 style="font-weight: 350">Physical Disabilities</h3>
                    <ul>
                        <li> Books by Mail</li>
                        <li> Talking Books</li>
                    </ul>
            </div>
     </div>
    
        <div class="container  text-center">
            <h3>More Information</h3>
            <p>Please contact Ask kathmandu library with any questions.</p>
        </div>
      
    </div>
</div>
@endsection