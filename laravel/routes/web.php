<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
});
Route::get('/help', function () {
    return view('help', ['title' => 'Help']);
});
Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
});
Route::get('/blog', function () {
    return view('blog.home', ['title' => 'Blog']);
});
Route::get('/donate', function () {
    return view('donate', ['title' => 'Donate']);
});
