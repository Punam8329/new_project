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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->middleware(['auth', 'checkuser:punamshinde618@gmail.com']);

Route::get('contact', function () {
    return view('contact');
})->middleware(['auth', 'checkuser:punamshinde@gmail.com']);;

// for ipcheck group
// Route::group(['middleware' => ['ipcheck']], function () {

//     Route::get('about', function () {
//         return view('about');
//     })->middleware('ipcheck');
    
//     Route::get('contact', function () {
//         return view('contact');
//     });
    
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
