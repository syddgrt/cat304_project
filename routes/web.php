<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/member', [MemberController::class, 'index']);

Route::get('/member/register', [MemberController::class, 'register']);

Route::get('/member/profile', [MemberController::class, 'profile']);

Route::get('/googleMaps', [GoogleController::class, 'index']);

Route::view('main', 'main')
	->name('main')
	->middleware(['auth', 'verified']);
