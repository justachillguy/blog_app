<?php

use Illuminate\Support\Facades\Auth;
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



Route::controller(PageController::class)->group(function(){
    Route::get("/","index")->name("index");
    Route::get("/article-detail/{slug}","show")->name("detail");
    Route::get("/category/{slug}","categorized")->name("categorized");
});

Route::resource("comment",CommentController::class)->only(["store","update","destroy"])->middleware("auth");


Auth::routes();

Route::middleware(['auth'])->prefix("dashboard")->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user-list', [HomeController::class, 'users'])->name('users')->can('admin-only');
});
