<?php

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])-> name('home');
Route::view('/about', view:'about')-> name('about');
Route::view('/contact', view:'contact')-> name('contact');
Route::get('/posts/{postId}', 
            [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');