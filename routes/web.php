<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EshopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;

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

Route::get('/', HomepageController::class)->name('home');
Route::get('/category/{category:slug}', \App\Http\Controllers\BlogcategoryController::class)->name('category');
Route::get('/post/{post:slug}', \App\Http\Controllers\PostController::class)->name('post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group([
    'prefix' => 'frontend',
    'as' => 'frontend.'
], function () {
    Route::get('/', function () {
        return view('frontend.home');
    })->name('home');
});

Route::group([
    'prefix' => 'eshop',
    'as' => 'eshop.'
], function () {
    Route::get('/', EshopController::class)->name('home');
    Route::view('/about', 'eshop.about')->name('about');
    Route::get('category/{category:slug}', CategoryController::class)->name('category');
    Route::get('product/{product:slug}', ProductController::class)->name('product');
    Route::post('order/{product}', [OrderController::class, 'store'])->name('order.store');
    Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
});
