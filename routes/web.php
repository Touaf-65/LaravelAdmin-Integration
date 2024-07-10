<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {
    return view('dashboard.auth.auth-sign-in');
})-> name('Sign In');

Route::get('/sign-up', function () {
    return view('dashboard.auth.auth-sign-up');
})-> name('Sign Up');

Route::get('/recover-password', function () {
    return view('dashboard.auth.auth-recoverpw');
})-> name('Recover Password');

Route::get('/confirm-mail', function () {
    return view('dashboard.auth.auth-confirm-mail');
})-> name('Confirm Mail');