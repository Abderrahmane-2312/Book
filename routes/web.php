<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EmployersController;
use Illuminate\Support\Facades\Route;



Route::get('/authors' , [AuthorController::class ,'index'] )->name('authors.index') ;
Route::get('/authors/{id}' , [AuthorController::class ,'show'] )->name('authors.show') ;
Route::delete('/destroy/{id}' , [AuthorController::class ,'destroy'] ) ;



Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('employers', EmployersController::class);

Route::resource('books', BookController::class);
// Route::resource('books', BookController::class)->only([
//     'create', 'edit', 'destroy'
// ])->middleware('admin');



// Route::post('/login', [AdminController::class, 'login'])->name('auth.login'); 
// Route::get('/login', [AdminController::class, 'index'])->name('auth.index');     //show Login Form
// Route::get('/signup', [AdminController::class, 'signup'])->name('auth.signup');  
// Route::post('/singup', [AdminController::class, 'store'])->name('auth.store');

// Route::prefix('/admin')->group(function () {
//     Route::get('/login', [AdminController::class, 'index'])->name('auth.index');
//     Route::post('/login', [AdminController::class, 'login']);
//     Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//     // Route::post('logout', [AdminController::class, 'logout'])->name('auth.signup');
// });
