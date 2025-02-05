<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class, 'myfunction']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/users',
[UserController::class, 'index']);
Route::get('/user/{id}',
[UserController::class, 'edit']);
Route::put('/user',
[UserController::class, 'edit_action']);
Route::delete('/user',
[UserController::class, 'delete']);

Route::get('/404', function(){
    abort(404);
});


Route::get('/500', function(){
    abort(500);
});
