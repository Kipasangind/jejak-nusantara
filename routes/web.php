<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminContributionController;
use App\Http\Controllers\RegionController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// HOME
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// DAFTAR BUDAYA
Route::get('/budaya', [CultureController::class, 'index'])
    ->name('cultures.index');

// DETAIL BUDAYA
Route::get('/budaya/{slug}', [CultureController::class, 'show'])
    ->name('cultures.show');

// FORM KONTRIBUSI
Route::get('/kontribusi', function () {
    return view('pages.contribute');
})->name('contribute');

// SUBMIT KONTRIBUSI
Route::post('/kontribusi', [ContributionController::class, 'store'])
    ->name('contribute.store');

Route::get('/wilayah', [RegionController::class, 'index'])->name('regions.index');
Route::get('/wilayah/{province}', [RegionController::class, 'show'])->name('regions.show');
/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// DASHBOARD ADMIN
Route::get('/admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

// LIST KONTRIBUSI PENDING
Route::get('/admin/contributions', [AdminContributionController::class, 'index'])
    ->name('admin.contributions.index');

// REVIEW KONTRIBUSI
Route::get('/admin/contributions/{id}', [AdminContributionController::class, 'show'])
    ->name('admin.contributions.review');

// APPROVE KONTRIBUSI
Route::post('/admin/contributions/{id}/approve', [AdminContributionController::class, 'approve'])
    ->name('admin.contributions.approve');

// DELETE KONTRIBUSI
Route::delete('/admin/contributions/{id}', [AdminContributionController::class, 'destroy'])
    ->name('admin.contributions.delete');

// LOGIN (DUMMY)
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

// REGISTER (DUMMY)
Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');
