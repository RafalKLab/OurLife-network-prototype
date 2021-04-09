<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/**
 * Authorization
 */
Route::get('/signup', [App\Http\Controllers\AuthController::class, 'getSignup'])->middleware('guest')->name('auth.signup');
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'postSignup'])->middleware('guest');

Route::get('/signin', [App\Http\Controllers\AuthController::class, 'getSignin'])->middleware('guest')->name('auth.signin');
Route::post('/signin', [App\Http\Controllers\AuthController::class, 'postSignin'])->middleware('guest');

Route::get('/signout', [App\Http\Controllers\AuthController::class, 'getSignout'])->name('auth.signout');

/**
 *  Search
 */
Route::get('/search', [App\Http\Controllers\SearchController::class, 'getResults'])->name('search.results');

/**
 * Profiles
 */
Route::get('/user/{username}', [App\Http\Controllers\ProfileController::class, 'getProfile'])->name('profile.index');

/**
 * Edit profile
 */
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'getEdit'])->middleware('auth')->name('profile.edit');
Route::post('/profile/edit', [App\Http\Controllers\ProfileController::class, 'postEdit'])->middleware('auth')->name('profile.edit');

/**
 * Friends
 */
Route::get('/friends', [App\Http\Controllers\FriendController::class, 'getIndex'])->middleware('auth')->name('friend.index');
Route::get('/friends/add/{username}', [App\Http\Controllers\FriendController::class, 'getAdd'])->middleware('auth')->name('friend.add');
Route::get('/friends/accept/{username}', [App\Http\Controllers\FriendController::class, 'getAccept'])->middleware('auth')->name('friend.accept');
Route::post('/friends/delete/{username}', [App\Http\Controllers\FriendController::class, 'postDelete'])->middleware('auth')->name('friend.delete');
