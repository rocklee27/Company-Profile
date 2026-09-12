<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/coba', [CompanyProfileController::class, 'index2']);
Route::put('/coba/update/{companyProfile}', [CompanyProfileController::class, 'update']);

Route::get('/', [CompanyProfileController::class, 'index']);

Route::get('/percobaan-ngeroute', function () {
    $name = "jaka sutrisno";
    return "welcome selamat siang $name";
});

Route::get('/percobaan-ngeroute-2', function () {
    $name = "jaka sutrisno";
    return view('landing-page.home', ['name'=>$name]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class);

});


require __DIR__.'/auth.php';
