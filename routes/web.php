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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//OAuth GOOGLE
Route::get('/auth/google/redirect', [\App\Http\Controllers\Auth\OAuthController::class,'googleRedirect'])->name('google.redirect');
Route::get('/auth/google/callback', [\App\Http\Controllers\Auth\OAuthController::class,'googleCallback']);
//OAuth FACEBOOK
Route::get('/auth/facebook/redirect', [\App\Http\Controllers\Auth\OAuthController::class,'facebookRedirect'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [\App\Http\Controllers\Auth\OAuthController::class,'facebookCallback']);
//OAuth GITHUB
Route::get('/auth/github/redirect', [\App\Http\Controllers\Auth\OAuthController::class,'githubRedirect'])->name('github.redirect');
Route::get('/auth/github/callback', [\App\Http\Controllers\Auth\OAuthController::class,'githubCallback']);
