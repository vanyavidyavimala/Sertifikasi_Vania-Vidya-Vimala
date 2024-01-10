<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RentlogController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RentController;

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
    return view('login');
});

Route::get('/books-add', [CategoriesController::class, 'kategori']);
Route::post('/books-add', [CategoriesController::class, 'add']);

Route::post('/login',[LoginController::class,'masuk']);
Route::get('/books',[BooksController::class,'buku']);
Route::get('/categories',[CategoriesController::class,'kategori']);

Route::get('/rentlog',[RentlogController::class,'pinjam']);
Route::get('/update/{judul}',[RentlogController::class,'instock'])->name('update.book');

Route::get('/logout',[LogoutController::class,'keluar']);
Route::get('/books-edit/{id}', [BooksController::class, 'edit'])->name('books.edit');
Route::put('/books-update/{id}', [BooksController::class, 'update'])->name('books.update');

Route::get('/dashboard',[RentlogController::class,'pinjam']);
Route::get('/categories',[KatalogController::class,'buku']);
Route::get('/logout', function () {
    return view('login');
});
Route::get('/delete/books/{id}',[BooksController::class,'deletebooks'])->name('delete.books');

Route::get('/books-rent',[RentController::class,'drop']);
Route::post('/books-rent',[RentController::class,'insert']);
