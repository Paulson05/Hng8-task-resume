<?php

use App\Http\Controllers\BACKEND\AdminController;
use App\Http\Controllers\BACKEND\ContactController;
use App\Http\Controllers\FRONTEND\FrontendController;
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


Route::view( '/dashboard','backend.template');
Route::get('/', [FrontendController::class, 'homePage'])->name('home.page');
Route::get('/contact/table',  [AdminController::class, 'getContact'])->name('get.contact');
Route::get('/admin',  [AdminController::class, 'index'])->name('admin.index');

Route::get('/resume', [FrontendController::class, 'resume'])->name('resume');
Route::get('/contactus', [FrontendController::class, 'contactUs'])->name('contact');
Route::post('/postcontact', [ContactController::class, 'postContact'])->name('post.contact');

