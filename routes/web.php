<?php

use App\Http\Controllers\Users;
use App\Http\Controllers\Services;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Departments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointemnetController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

Route::get('/', [Departments::class, 'home']);


Route::get('/contact', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('about', function () {
    return view('about');
});
Route::get('services', [Departments::class, 'index']);
Route::get('appointment', [AppointemnetController::class, 'index']);
Route::post('store', [AppointemnetController::class, 'store'])->name("store");
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
Route::get('admin/dashboard', [Users::class, 'getUsers']);
Route::get('admin/consultants', [Users::class, 'getConsultants']);
Route::get('delete/{id}', [Users::class, 'destroy']);


Route::get('admin/services', [Departments::class, 'getServices']);
Route::get('delete/{id}', [Departments::class, 'destroy']);


// Route::get('/admin/contact', [ContactController::class, 'showContact'])->name('admin.contact')->middleware(['auth', 'can:isAdmin']);
// Route::get('/admin/subscribers', [ContactController::class, 'showSubscribers'])->name('admin.subscribers');


Route::get('admin/appointement', function () {
    return view('admin/appointement');
});
