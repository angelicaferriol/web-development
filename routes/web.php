<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home/{id}', [HomeController::class, 'homeIDPage']);

Route::get('/home/{id}/{name}', [HomeController::class, 'homeIDNamePage'])->name("home");

Route::get('/about/{id}/{name}', [PageController::class, 'aboutPage'])->name('about');

Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');


Route::group(['prefix' => 'user'], function () {

    Route::get('/', [UserController::class, 'userHome'])->name('user');

    Route::get('/list', [UserController::class, 'userList'])->name('user.list');

    Route::get('/list/update/{id}', [UserController::class, 'showUserUpdate'])->name('user.showUpdate');

    Route::put('/list/update/{id}', [UserController::class, 'updateSubmit'])->name('user.updateSubmit');

    Route::get('/edit/{id}', [UserController::class, 'userEdit'])->name('user.edit');

    Route::get('/add', [UserController::class, 'userAdd'])->name('user.add');

    Route::get('/delete/{id}', [UserController::class, 'deleteID'])->name('user.delete');

    Route::post('/', [UserController::class, 'userSubmit'])->name('user.submit');
});

Route::fallback([FallbackController::class, 'index']);

Route::get('/compute/{num1}/{num2}', [CalculateController::class, 'index'])->name('compute');
Route::get('pricing', [PricingController::class, 'index'])->name('pricing');


Route::group(['prefix' => 'post'], function () {
    Route::get('/', [PostController::class, 'index'])->name('post');
    Route::post('/', [PostController::class, 'post'])->name('post.submit');
    Route::get('/update/{id}', [PostController::class, 'showUpdate'])->name('post.showUpdate');
    Route::put('/update/{id}', [PostController::class, 'updateSubmit'])->name('post.updateSubmit');
});
