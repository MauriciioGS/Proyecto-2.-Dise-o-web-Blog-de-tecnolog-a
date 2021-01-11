<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostVjController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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
	$posts = Post::all();
    $autor = User::all();               
    return view('welcome', ['posts'=>$posts, 'autor'=>$autor, 'cont'=>0]);
})->middleware('welcome');


Route::resource('welcomeposts',PostController::class);

Route::resource('usercomment',CommentController::class);

Route::resource('userposts',PostController::class);

Route::resource('userpostsvj',PostVjController::class);

Route::resource('profile',PerfilController::class);

Route::resource('userupdate',UserController::class);

Route::middleware(['admin'])->group(function(){
	Route::get('admin', function(){
		return view('layouts.admin');
	});
	Route::resource('adminposts', PostController::class);
	Route::resource('adminpostsvj', PostVjController::class);	
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

