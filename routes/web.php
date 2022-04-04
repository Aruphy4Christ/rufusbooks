<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OwnersController;
use App\Http\Controllers\CatehoryController;
use App\Http\Controllers\BookitemController;
use App\Http\Controllers\BookdetailController;


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
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/author', [OwnersController::class, 'author']);
Route::post('/author', [OwnersController::class, 'store']);
Route::get('/view_author', [BookdetailController::class, 'view_author']);
Route::get('{id}/edit', [OwnersController::class, 'edit']);
Route::post('{id}/edit', [OwnersController::class, 'update']);
Route::delete('/delete/author/{owner}', [OwnersController::class, 'destroy']);


Route::get('/category', [CatehoryController::class, 'category']);
Route::post('/category', [CatehoryController::class, 'store']);
Route::get('/view_category', [CatehoryController::class, 'view_category']);
Route::get('{id}/edit_category', [CatehoryController::class, 'edit_cart']);
Route::post('{id}/edit_category', [CatehoryController::class, 'update']);
Route::delete('/delete/category/{catehory}', [CatehoryController::class, 'destroy']);



Route::get('/book', [BookitemController::class, 'book']);
Route::post('/book', [BookitemController::class, 'store']);
Route::get('/view_book', [BookitemController::class, 'view_book']);
Route::get('{id}/edit_book', [BookitemController::class, 'edit_book']);
Route::post('{id}/edit_book', [BookitemController::class, 'update']);
Route::delete('/delete/book/{bookitem}', [BookitemController::class, 'destroy']);



// _____________________________________________________________________
// UI


Route::get('/books', [BookdetailController::class, 'bookdetail']);
Route::get('/{id}/single_book', [BookdetailController::class, 'single_book']);
Route::get('/books/list_category', [CatehoryController::class, 'list_category']);





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes(); 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [OwnersController::class, 'index']);
    // Route::get('/', 'PanelController@index');
});

