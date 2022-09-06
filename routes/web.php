<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;

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

//Route::get('/', function () {
//    return 'Selamat Datang';
//});

//Route::get('/', function () {
//    return 'NIM : 1941720128 <br> Nama : Frebyandika Dwima Putra <br> Kelas : Web-B';
//});

//Route::get('/articles/{id}', function ($id) {
//    return 'Halaman artikel ini dengan id ' . $id;
//});

//Route::get('/', [PageController::class, 'index']);

//Route::get('/about', [PageController::class, 'about']);

//Route::get('/articles/{id}', [PageController::class, 'articles']);

//Route::get('/', [HomeController::class, 'index']);

//Route::get('/about', [AboutController::class, 'index']);

//Route::get('/articles/{id}', [ArticleController::class, 'show']);

//Route::get('/home', function () {
//    echo '<h1>Halaman Awal Website<h1>';
//});

//Route::prefix('category')->group(function () {
//    route::get('/{id}', [ProductController::class, 'product']);
//});

//Route::get('/news/{id?}', [NewsController::class, 'news']);

//Route::prefix('program')->group(function () {
//    route::get('/{id}', [ProgramController::class, 'program']);
//});

Route::get('/AboutUs', [AboutUsController::class, 'about']);