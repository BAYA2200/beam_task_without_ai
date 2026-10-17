<?php

use App\Http\Controllers\PostCreateConroller;
use App\Http\Controllers\PostListConroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('post', PostCreateConroller::class);
Route::get('/postlist',[PostListConroller::class, 'index']);

Route::get('/postcreate',[PostCreateConroller::class, 'create']);
Route::post('/postcreate',[PostCreateConroller::class, 'store']);

Route::get('/postdelete', [PostDeleteController::class, 'destroy']);