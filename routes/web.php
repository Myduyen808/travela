<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TravelGuidesController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\OPPController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\AdminController;
use App\Http\Controllers\admin\DashboardController;
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/travel-guides', [TravelGuidesController::class, 'index'])->name('team');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/404', [OPPController::class, 'index'])->name('404');
Route::get('/tour-detail', [TourDetailController::class, 'index'])->name('tour-detail');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blog-detail');
Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/adminn', [AdminController::class, 'index'])->name('admin');
Route::get('/dashbroad', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/test', function () {
//     return "1234567";
// });

Route::get('/admin',function () {
    return view('admin.dashboard');
});

