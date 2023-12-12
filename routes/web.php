<?php
use App\Http\Controllers;
use App\Http\Controllers\reviewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('newhome');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/songDetails_test', function () {
    return view('songDetails_test');
});

Route::get('/songDetails_test', [reviewController::class, 'index']);
