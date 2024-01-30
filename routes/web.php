<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\HomepageController;

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
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
Route::get('/nos-services', [HomepageController::class, 'nos_service']);
Route::get('/accueil', [HomepageController::class, 'accueil'])->name('accueil');
Route::get('/postuler-user', [HomepageController::class, 'postule_user'])->name('postuler-user');

//INSERT IN DATABASE
Route::post('/logo', [ImagesController::class, 'logo'])->name('logo');
Route::post('/article', [ImagesController::class, 'article'])->name('article');
Route::post('/insert-postuler', [HomepageController::class, 'insert_postule'])->name('insert-postuler');
//END INSERT

//POSTULE


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view-article', [HomeController::class, 'view_article'])->name('view-article');
Route::get('/insert-article', [HomeController::class, 'insert_article'])->name('insert-article');
Route::post('/add-article', [HomeController::class, 'add_article'])->name('add-article');

//DELETE
Route::get('delete-article/{id}', [HomeController::class, 'delete_article'])->name('delete-article');

//UPDATE
Route::get('/update-article/{id}', [HomeController::class, 'update_article'])->name('update-article');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('update');

//POSTULE
Route::get('/admin-postuler', [HomeController::class, 'admin_postule'])->name('admin-postuler');
