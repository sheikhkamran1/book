<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the category$category table
        $category = Category::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('category'));
    }
}
