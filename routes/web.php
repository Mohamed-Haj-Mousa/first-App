<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use ILLUMINATE\Http\Request;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ServeController;

Route::controller(StudentController::class)->group(function () {
    Route::get("/student", 'index');       // StudentController -> index
    Route::get("/student/show", 'show');   // StudentController -> show
}); 
Route::controller(TeacherController::class)->group(function () {
    Route::get("/teacher", 'index');       //teacherController -> index
    Route::post("/teacher/show", 'show');   //TeacherController -> show
});
Route::get('/product',[ProductController::class,'index']);
Route::get('/salles',[\App\Http\Controllers\SallestController::class,'index']);
Route::resource('posts',PostController::class);
//!  ----------------Controller Invoke --------------------------------
Route::get('serve',ServeController::class);

//Route::get('/student',[StudentController::class, 'index']);
//Route::get('/student/show', [StudentController::class, 'show']);
//Route::get('/teacher', [TeacherController::class, 'index']);
//Route::post('/teacher/show', [TeacherController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
    // return 'Welcome In First Project In Laravel ';
});
Route::get('test', function () {
    return view('test');
});
//php artisan make:controller UserController
