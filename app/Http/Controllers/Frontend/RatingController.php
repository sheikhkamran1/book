<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function add(Request $request)
    {
       $stars_rated = $request->input('product_rating');
       $book_id = $request->input('book_id');

       $book_check = Book::where('id', $book_id)->where('status','0')->first();
       if($book_check)
       {
           $verified_purchase = Borrow::where('orders.user_id', Auth::id())
                              ->join('order_items','orders.id','order_items.order_id')
                              ->where('order_items.prod_id',$book_id)->get();

                              if($verified_purchase->count() > 0)
                              {
                                  $existing_rating = Rating::where('user_id', Auth::id())->where('prod_id',$book_id)->first();
                                  if($existing_rating)
                                  {
                                    $existing_rating->$stars_rated = $stars_rated;
                                    $existing_rating->update();
                                  }
                                  else{
                                  Rating::create([
                                      'user_id'=> Auth::id(),
                                      'prod_id'=> $book_id,
                                      'stars_rated'=>$stars_rated,
                                  ]);
                              }
                              return redirect()->back()->with('status',"Thank you for rating this product");
                            }
                              else
                              {
                                  return redirect()->back()->with('status', "You cannot rate this product without purchase");
                              }
       }
       else
       {
           return redirect()->back()->with('status', "The link you followed was broken");
       }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
