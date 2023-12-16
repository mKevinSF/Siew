<?php
use App\Http\Controllers;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\musicController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
})->name('home');

Route::get('/home', function () {
    return view('newhome');
})->name('newhome');

// Route::get('/chart', function () {
//     return view('chart');
// });

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerpost'])->name('register.post');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');
Route::get('/logout',[AuthManager::class, 'logout'])->name('logout');


Route::get('/songDetails_test', function () {
    return view('songDetails_test');
});

Route::get('/songDetails_test/{post}', [reviewController::class, 'show']);

Route::get('/songList', function () {
    return view('songList');
});

Route::get('/songList', [musicController::class, 'list']);

Route::get('/chart',[RatingController::class,'list']);

