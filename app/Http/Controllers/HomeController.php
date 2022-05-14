<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     $book = Book::all();
    //     return view('frontend.pages.home',compact('category','setting','book'));
    // }

    // public function contact()
    // {
    //     $setting = Setting::first();
    //     return view('frontend.pages.contact',compact('setting'));
    // }

    // public function subject()
    // {
    //     $setting = Setting::first();
    //     return view('frontend.pages.subject',compact('setting'));
    // }

    // public function publications()
    // {
    //     $setting = Setting::first();
    //     return view('frontend.pages.publications',compact('setting'));
    // }

    // public function authors()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     return view('frontend.pages.authors',compact('category','setting'));
    // }

    // public function accessibility()
    // {
        
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     return view('frontend.pages.accessibility',compact('category','setting'));
    // }

    // public function books()
    // {
        
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     return view('frontend.pages.books',compact('category','setting'));
    // }


    // public function borrow_book()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     $book = Book::all();
    //     return view('frontend.pages.borrow_book',compact('book','setting','category'));
    // }

    // public function collections()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     $book = Book::all();
    //     return view('frontend.pages.collections',compact('book','setting','category'));
    // }

    // public function about()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     $book = Book::all();
    //     return view('frontend.pages.about',compact('book','setting','category'));
    // }

    // public function news()
    // {
    //     $setting = Setting::first();
    //     $category = Category::all();
    //     $book = Book::all();
    //     return view('frontend.pages.news',compact('book','setting','category'));
    // }

    // public function cart()
    // {
    //     $book = Book::all();
    //     return view('frontend.pages.cart',compact('book'));
    // }

    
    // public function example_cart()
    // {
    //     return view('frontend.pages.example_cart');
    // }

    // public function cart_list()
    // {
    //     $book = Book::all();
    //     $ratings = Rating::where('prod_id',$book->id)->get();
    //     $rating_sum = Rating::where('prod_id',$book->id)->sum('stars_rated');
    //     $user_rating = Rating::where('prod_id',$book->id)->where('user_id', Auth::id())->first();
    //     if($ratings->count() > 0)
    //     {
    //     $rating_value =  $rating_sum/$ratings->count();
    //     }
    //     else{
    //         $rating_value = 0; 
    //     }
    //     return view('frontend.pages.cart_list',compact('book','ratings','rating_value','user_rating'));
    //     // return view('frontend.pages.cart');
    // }

    
}


