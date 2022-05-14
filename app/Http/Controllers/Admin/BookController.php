<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('backend.book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.book.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->description = $request->description;
        $book->pages = $request->pages;
        $book->book_price = $request->book_price;
        $book->issue_price = $request->issue_price;
        $book->category_id = $request->category_id;
         //for image
         if($request->hasFile('image')){
            $file = $request->image;
            $newName= time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $book->image = 'images/' . $newName;
        }
        $book->save();
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
        $book = Book::find($id);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->description = $request->description;
        $book->pages = $request->pages;
        $book->book_price = $request->book_price;
        $book->issue_price = $request->issue_price;
        $book->category_id = $request->category_id;
         //for image
         if($request->hasFile('image')){
            $file = $request->image;
            $newName= time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $book->image = 'images/' . $newName;
        }
        $book->update();
        $request->session()->flash('message','Saved Successfully');
        return redirect()->back();
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
