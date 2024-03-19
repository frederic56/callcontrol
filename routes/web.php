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
Route::get('/services', [HomepageController::class, 'services'])->name('services');
Route::get('/blog', [HomepageController::class, 'blog'])->name('blog');
Route::get('/recrutement', [HomepageController::class, 'recrutement'])->name('recrutement');
Route::get('/offre', [HomepageController::class, 'offre'])->name('offre');
Route::get('/insert-offre', [HomepageController::class, 'insert_offre'])->name('insert_offre');
Route::get('/show-offre', [HomepageController::class, 'show_offre'])->name('show_offre');
Route::get('/postule-user', [HomepageController::class, 'postule_user'])->name('postule_user');




//INSERT IN DATABASE
Route::post('/logo', [ImagesController::class, 'logo'])->name('logo');
Route::post('/article', [ImagesController::class, 'article'])->name('article');
Route::post('/insert-postuler', [HomepageController::class, 'insert_postule'])->name('insert-postuler');
Route::post('/user-comment', [HomepageController::class, 'add_comment'])->name('user-comment');
Route::post('/add-offre', [HomepageController::class, 'user_postule'])->name('add-offre');

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
Route::get('/admin-candidate', [HomeController::class, 'admin_candidate'])->name('admin-candidate');
Route::get('/admin-home', [HomepageController::class, 'admin_home'])->name('admin-home');
Route::get('/admin-logout', [HomepageController::class, 'admin_logout'])->name('admin-logout');
Route::get('/admin-social-net', [HomepageController::class, 'admin_social_net'])->name('admin-social-net');
Route::get('/user-comments', [HomepageController::class, 'admin_user_comments'])->name('user-comments');
Route::get('/admin-register', [HomepageController::class, 'admin_register'])->name('admin-register');



Route::get('/view-chart', [HomepageController::class, 'userChart'])->name('userChart');