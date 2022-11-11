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

Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('appointment', function () {
    return view('appointment');
});
Route::get('payment', function () {
    return view('payment');
});
Route::get('profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

// admin dashboard
// Route::get('admin/dashboard', [UserController::class, 'getUsers'])->middleware(['auth', 'can:isAdmin']);
// Route::get('admin/owners', [UserController::class, 'getOwners'])->middleware('admin')->middleware(['auth', 'can:isAdmin']);;

// Route::get('admin/surveys', [SurveyController::class, 'getSurveys'])->middleware('admin')->middleware(['auth', 'can:isAdmin']);

// Route::get('/admin/contact', [ContactController::class, 'showContact'])->name('admin.contact')->middleware(['auth', 'can:isAdmin']);
// Route::get('/admin/subscribers', [ContactController::class, 'showSubscribers'])->name('admin.subscribers');

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('admin/owners', function () {
    return view('admin/owners');
});
Route::get('admin/surveys', function () {
    return view('admin/surveys');
});
Route::get('admin/contact', function () {
    return view('admin/contact');
});
Route::get('admin/subscribers', function () {
    return view('admin/subscribers');
});
