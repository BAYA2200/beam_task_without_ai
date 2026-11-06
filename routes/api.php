<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource('category', CategoryController::class);
Route::apiResource('post',PostController::class);
Route::apiResource('post/{post}/comments',CommentController::class);
Route::apiResource('person',PersonController::class);
Route::apiResource('person/{person}/passport',PassportController::class);
Route::apiResource('teacher',TeacherController::class);
Route::apiResource('teacher/{teacher}/course',CourseController::class);




