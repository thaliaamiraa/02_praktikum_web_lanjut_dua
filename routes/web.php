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
//     return view('welcome');
// });

route ::get('/',[App\Http\Controllers\PageController::class, 'index']);
route ::get('/about',[App\Http\Controllers\PageController::class, 'about']);
route ::get('/articles/{id}',[App\Http\Controllers\PageController::class, 'articles']);