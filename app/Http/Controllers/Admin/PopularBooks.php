<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Popular_book;
use Illuminate\Http\Request;

class PopularBooks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $popular_books = PopularBooks::all();
        return view('backend.popular_books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.popular_books.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $popular_books = new Popular_book();
        $popular_books->name = $request->name;
        $popular_books->author = $request->author;
        $popular_books->publication = $request->publication;
        $popular_books->description = $request->description;
        $popular_books->pages = $request->pages;
        $popular_books->book_price = $request->book_price;
        $popular_books->issue_price = $request->issue_price;
        $popular_books->category_id = $request->category_id;
         //for image
         if($request->hasFile('image')){
            $file = $request->image;
            $newName= time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $popular_books->image = 'images/' . $newName;
        }
        $popular_books->save();
        $request->session()->flash('message','Saved Successfully');
        return redirect()->back();
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
        $category = Category::find($id);
        return view("backend.book.edit",compact('category'));
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
        // $popular_books = PopularBooks::find($id);
        // $popular_books->name = $request->name;
        // $popular_books->author = $request->author;
        // $popular_books->publication = $request->publication;
        // $popular_books->description = $request->description;
        // $popular_books->pages = $request->pages;
        // $popular_books->book_price = $request->book_price;
        // $popular_books->issue_price = $request->issue_price;
        // $popular_books->category_id = $request->category_id;
        //  //for image
        //  if($request->hasFile('image')){
        //     $file = $request->image;
        //     $newName= time() . $file->getClientOriginalName();
        //     $file->move('images',$newName);
        //     $popular_books->image = 'images/' . $newName;
        // }
        // $popular_books->update();
        // $request->session()->flash('message','Saved Successfully');
        // return redirect()->back();
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
