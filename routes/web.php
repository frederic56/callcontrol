<?php

use App\Http\Controllers\HomepageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomepageController::class, 'index']);
Route::get('/nos-services', [HomepageController::class, 'index']);
Route::get('/accueil', [HomepageController::class, 'accueil'])->name('accueil');

//INSERT IN DATABASE
Route::post('/logo', [ImagesController::class, 'index'])->name('logo');
Route::post('/article', [ImagesController::class, 'article'])->name('article');
//END INSERT
