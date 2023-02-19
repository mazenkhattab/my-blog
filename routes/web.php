<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authorcontroller;
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
    return view('welcome');
});
Route::post('/login', [authorcontroller::class,'login'])->name('login');
Route::post('/signup', [authorcontroller::class,'signup'])->name('signup');





Route::middleware('CheckauthorRole')->get('posts', [authorcontroller::class, 'index'])->name('posts.index');
Route::middleware('CheckauthorRole')->get('posts/create', [authorcontroller::class,'create'])->name('posts.create');
Route::middleware('CheckauthorRole')->post('posts', [authorcontroller::class,'store'])->name('posts.store');
Route::middleware('CheckauthorRole')->get('posts/{post}', [authorcontroller::class,'show'])->name('posts.show');
Route::middleware('CheckauthorRole')->get('posts/{post}/edit', [authorcontroller::class,'edit'])->name('posts.edit');
Route::middleware('CheckauthorRole')->patch('posts/{post}', [authorcontroller::class,'update'])->name('posts.update');
Route::middleware('CheckauthorRole')->delete('posts/{post}', [authorcontroller::class,'destroy'])->name('posts.destroy');




Route::middleware('CheckAdminRole')->get('admin/posts', [admincontroller::class,'index'])->name('admin.posts.index');
Route::middleware('CheckAdminRole')->get('admin/posts/create', [admincontroller::class,'create'])->name('admin.posts.create');
Route::middleware('CheckAdminRole')->post('admin/posts', [admincontroller::class,'store'])->name('admin.posts.store');
Route::middleware('CheckAdminRole')->get('admin/posts/{post}', [admincontroller::class,'show'])->name('admin.posts.show');
Route::middleware('CheckAdminRole')->get('admin/posts/{post}/edit', [admincontroller::class,'edit'])->name('admin.posts.edit');
Route::middleware('CheckAdminRole')->patch('admin/posts/{post}', [admincontroller::class,'update'])->name('admin.posts.update');
Route::middleware('CheckAdminRole')->delete('admin/posts/{post}', [admincontroller::class,'destroy'])->name('admin.posts.destroy');