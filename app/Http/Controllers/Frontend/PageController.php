<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Contact_stores;
use App\Models\Frontend\Order_items;
use App\Models\MyCart;
use App\Models\OrderDetails;
use App\Models\Rating;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {

        //  return "ss";
        $setting = Setting::first();
        $category = Category::all();
        $rating = Rating::all();
        $book = Book::all();
        return view('frontend.pages.home', compact('category', 'setting', 'book', 'rating'));
    }

    //-------------------------------------- Contact page -----------------------------------------//
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function store(Request $request)
    {
        // return $request;
        // dd(Auth::user());
        if (Auth::check()) {
            dd(Auth::user());

            $contact_stores = new Contact_stores();
            $contact_stores->user_id = Auth::id();
            $contact_stores->email = $request->email;
            $contact_stores->description = $request->description;
            $contact_stores->save();
            $request->session()->flash('message', 'Saved Successfully');
            return redirect()->back();
        } else {
            return redirect('/contact');
        }
    }
    //-------------------------------------- Contact page ends-----------------------------------------//

    //-------------------------------------- About page -----------------------------------------//
    public function about()
    {
        $setting = Setting::first();
        $category = Category::all();
        $book = Book::all();
        return view('frontend.pages.about', compact('book', 'setting', 'category'));
    }
    //-------------------------------------- About page ends-----------------------------------------//

    //-------------------------------------- Collections page -----------------------------------------//
    public function collections()
    {
        return view('frontend.pages.collections');
    }
    //-------------------------------------- Collections page -----------------------------------------//

    //-------------------------------------- Mycart page -----------------------------------------//
    public function my_cart()
    {
        $cartitems = cart::where('user_id', Auth::id())->with('book')->get();

        return view('frontend.pages.my_cart', compact('cartitems'));
    }
    //-------------------------------------- Mycart page -----------------------------------------//

    //-------------------------------------- Checkout page -----------------------------------------//
    public function checkout()
    {
        $old_cartitems = cart::where('user_id', Auth::id())->get();
        foreach ($old_cartitems as $cartitem) {
            if (!Book::where('id', $cartitem->prod_id)->where('qty', '>=', $cartitem->prod_qty)->exists()) {
                $removeItem = cart::where('user_id', Auth::id())->where('prod_id', $cartitem->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = cart::where('user_id', Auth::id())->get();

        return view('frontend.pages.checkout', compact('cartitems'));
    }

    //-------------------------------------- Publications page -----------------------------------------//
    public function publications()
    {
        $setting = Setting::first();
        return view('frontend.pages.publications', compact('setting'));
    }
    //-------------------------------------- Publications page -----------------------------------------//

    //-------------------------------------- Authors page -----------------------------------------//
    public function authors()
    {
        $setting = Setting::first();
        $category = Category::all();
        return view('frontend.pages.authors', compact('category', 'setting'));
    }
    //-------------------------------------- Authors page -----------------------------------------//

    //-------------------------------------- Accessibility page -----------------------------------------//
    public function accessibility()
    {
        $setting = Setting::first();
        $category = Category::all();
        return view('frontend.pages.accessibility', compact('category', 'setting'));
    }
    //-------------------------------------- Accessibility page -----------------------------------------//

    //-------------------------------------- Books page -----------------------------------------//
    public function books()
    {
        $setting = Setting::first();
        $category = Category::all();
        return view('frontend.pages.books', compact('category', 'setting'));
    }
    //-------------------------------------- Books page -----------------------------------------//


    // public function viewcategory($slug)
    // {
    //     if(Category::where('slug',$slug)->exists())
    //     {
    //         $category = Category::where('slug',$slug)->first();
    //         $book = Book::where('cate_id', $category->id)->where('status','0')->get();
    //         return view('frontend.pages.collections',compact('category','book'));

    //     }
    //     else{
    //         return redirect('/')->with('status',"Slug doesnot exists");
    //     }
    // }







    //-------------------------------------- borrow_book page -----------------------------------------//

    public function borrow_book()
    {
        $setting = Setting::first();
        $category = Category::all();
        $book = Book::all();
        return view('frontend.pages.borrow_book', compact('book', 'setting', 'category'));
    }
    //-------------------------------------- borrow_book page -----------------------------------------//

    //-------------------------------------- news page -----------------------------------------//
    public function news()
    {
        $setting = Setting::first();
        $category = Category::all();
        $book = Book::all();
        return view('frontend.pages.news', compact('book', 'setting', 'category'));
    }
    //-------------------------------------- news page -----------------------------------------//

    //-------------------------------------- cart page -----------------------------------------//
    public function cart()
    {
        $cartitems = cart::where('user_id', Auth::id())->get();
        $category = Category::first();
        $book = Book::first();
        return view('frontend.pages.cart', compact('book', 'category', 'cartitems'));
    }
    //-------------------------------------- cart page -----------------------------------------//

    public function addProduct(Request $request)
    {

        $book_id = $request->input('book_id');
        $book_qty = $request->input('book_qty');

        if (Auth::check()) {

            $prod_check = Book::where('id', $book_id)->first();
            if ($prod_check) {
                $isAlreadyInCart = Cart::where('prod_id', $book_id)->where('user_id', Auth::id())->first();
                if ($isAlreadyInCart) {

                    return response()->json(['status' => $prod_check->name . "Already added to cart"]);
                } else {

                    $cartItem = new Cart();
                    $cartItem->prod_id = $book_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $book_qty;
                    $cartItem->save();
                    // dd($cartItem);

                    return response()->json(['status' => $prod_check->name . "Added to cart"]);
                }
            }
        } else {
            return response()->json(['status' => "Login to continue"]);
        }
    }



    public function deleteproduct(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (MyCart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = MyCart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Deleted Successfully"]);
            }
        } else {
            return response()->json(['status' => "Login to continue"]);
        }
    }

    public function update_cart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_id');

        if (Auth::check()) {
            if (MyCart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cart = MyCart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cart->prod_qty = $product_qty;
                $cart->update();
                return response()->json(['status' => "Updated Successfully"]);
            }
        }
    }




    public function place_order(Request $request)
    {
        $order = new OrderDetails();
        $order->user_id = Auth::id();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->number = $request->number;
        $order->order_address = $request->order_address;
        $order->country = $request->country;
        $order->pin_code = $request->pin_code;
        $order->address = $request->address;
        $order->save();

        $cartitems = cart::where('user_id', Auth::id())->get();
        foreach ($cartitems as $item) {
            Order_items::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->qty,
                'price' => $item->books->price,
            ]);

            return redirect('/home')->with('status', "Order palced successfullys");
        }
    }




    public function cart_list()
    {
        $book = Book::all();
        $ratings = Rating::where('prod_id', $book->id)->get();
        $rating_sum = Rating::where('prod_id', $book->id)->sum('stars_rated');
        $user_rating = Rating::where('prod_id', $book->id)->where('user_id', Auth::id())->first();
        if ($ratings->count() > 0) {
            $rating_value =  $rating_sum / $ratings->count();
        } else {
            $rating_value = 0;
        }
        return view('frontend.pages.cart_list', compact('book', 'ratings', 'rating_value', 'user_rating'));
        // return view('frontend.pages.cart');
    }
}
