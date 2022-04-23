<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogPostController;
use \App\Http\Controllers\CustomAuthController;

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

Route::get('/blog', [BlogPostController::class, 'index'])->name('blog');
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show'])->name('blog.show');
Route::get('/blog/create/post', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/blog/create/post', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('blog/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
Route::put('blog/{blogPost}/edit', [BlogPostController::class, 'update']);
Route::delete('blog/{blogPost}', [BlogPostController::class, 'destroy']);
Route::get('blog-queries', [BlogPostController::class, 'queries']);

Route::get('login', [CustomAuthController::class, 'index'])->name('custom.login');
Route::get('registration', [CustomAuthController::class, 'create']);
Route::post('custom-registration', [CustomAuthController::class, 'store'])->name('custom.registration');
