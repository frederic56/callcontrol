<?php

use App\Http\Controllers\ImagesController;
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
Route::get('homepage', [ImagesController::class, 'logo'])->name('homepage');
//Route::get('homepage', [ImagesController::class, 'showArticle'])->name('homepage');

//INSERT IN DATABASE
Route::post('/logo', [ImagesController::class, 'index'])->name('logo');
Route::post('/article', [ImagesController::class, 'article'])->name('article');
//END INSERT
