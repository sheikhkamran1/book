<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PopularBooks;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', function() {
//     $path = _DIR_ . '/../.env';
//     if(file_exists($path))
//     {
//         return '<h1>Yes</h1>';
//     }
//     return '<h1>No</h1>';
// });


Auth::routes();
Route::post('add-to-cart',[PageController::class, 'addProduct']);
Route::post('delete-cart-item',[PageController::class, 'deleteproduct']);
Route::post('update_cart',[PageController::class, 'update-cart']);

Route::middleware(['auth'])->group(function (){
    Route::get('/cart', [PageController::class,'cart']);
Route::get('/checkout', [PageController::class,'checkout']);
Route::post('/place_order', [PageController::class,'place_order']);
});

Route::get('/home', [App\Http\Controllers\PageController::class, 'index'])->name('home');

//ADMIN
Route::resource('setting',SettingController::class);
Route::resource('category',CategoryController::class);
Route::resource('users',UserController::class);
Route::resource('book',BookController::class);
Route::resource('borrow',BorrowController::class);
Route::resource('popular_books',PopularBooks::class);
Route::resource('contact',ContactController::class);


//frontend
Route::get('/home',[PageController::class,'index']);
Route::post('/contacts_store',[PageController::class,'store']);
// Route::get('/message',[PageController::class,'message']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/subject',[PageController::class,'subject']);
Route::get('/publications',[PageController::class,'publications']);
Route::get('/authors',[PageController::class,'authors']);
Route::get('/search', [PostController::class,'search']);
Route::get('/accessibility', [PageController::class,'accessibility']);
Route::get('/books', [PageController::class,'books']);
Route::get('/borrow_book', [PageController::class,'borrow_book']);
Route::get('/collections', [PageController::class,'collections']);
Route::get('/about', [PageController::class,'about']);
Route::get('/news', [PageController::class,'news']);
Route::get('/cart_list', [PageController::class,'cart_list']);
Route::get('/add-rating', [RatingController::class,'add']);
Route::get('/my_cart', [PageController::class,'my_cart']);
Route::post('/rating',[RatingController::class,'store'])->name('rating');

// Route::get('/category/{slug}', [PageController::class,'viewcategory']);
// Route::get('/category/{cate_slug}/{prod_slug}', [PageController::class,'productview']);