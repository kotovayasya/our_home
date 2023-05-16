<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index',(['title' => 'Главная страница']));
});

Route::get('/register', [UserController::class, 'show_registration'])->middleware('guest');

Route::post('/create_user', [UserController::class, 'create']);

Route::get('/login', [UserController::class, 'login'])->middleware('guest');

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/forum', [ForumController::class, 'get_cities']);

Route::get('/forum/{city}', [ForumController::class, 'get_homes']);

Route::get('/forum/{city}/{id}/{home}', [ForumController::class, 'get_themes']);

Route::get('/forum/{city}/{id}/{home}', [ForumController::class, 'get_themes']);