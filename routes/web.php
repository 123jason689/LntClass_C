<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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
    return view('welcome',[
        'title' => 'Homepage'
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About Page',
        'name' => 'Jonathan',
        'email' => 'jonathan@gmail.com',
        'address' => 'Alam Sutera'
    ]);
});

//login &register
Route::get('/login', [loginController::class, 'login'])->middleware('guest')->name('login');
Route::POST('/login', [logincontroller::class, 'authenticate'])->middleware('guest');
Route::POST('/logout',[logincontroller::class, 'logout'])->middleware('auth');
Route::get('/register',[registerController::class, 'register'])->middleware('guest');
Route::POST('/register',[registerController::class, 'store'])->middleware('guest');


// book controller
Route::get('/create-book', [bookController::class,  'createBook']);
Route::POST('/store-book', [bookController::class, 'storeBook']);
Route::get('/library', [bookController::class, 'index'])->middleware('auth');
Route::get('/show-book/{book:id}', [bookController::class, 'showBook']);
Route::DELETE('/delete-book/{book:id}', [bookController::class, 'delete']);
Route::get('/edit-book/{book:id}', [bookController::class, 'edit']);
Route::PATCH('/update-book/{book:id}', [bookController::class, 'update']);

// genre route controller
Route::get('/create-genre', [genreController::class, 'createGenre']);
Route::POST('/store-genre', [genreController::class, 'storeGenre']);
Route::get('/genres', [genreController::class, 'index']);
Route::get('/show-genre/{genre:id}', [genreController::class, 'showGenre']);
