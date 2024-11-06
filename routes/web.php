<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/student', [StudentController::class , 'index']);
Route::delete('/student/{student}' , [StudentController::class, 'destroy'])->name('student.destroy');

Route::get('/post' , [PostController::class , 'index']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/loginpage' , [AuthController::class , 'loginPage'])->name('loginPage');
Route::post('/login' , [AuthController::class , 'login'])->name('login');


Route::get('/registerpage' , [AuthController::class , 'registerPage'])->name('registerPage');
Route::post('/register' , [AuthController::class , 'register'])->name('register');

Route::get('/users', [RoleController::class , 'index']);
Route::delete('/users/{user}', [RoleController::class , 'destroy'])->name('role.destroy');


