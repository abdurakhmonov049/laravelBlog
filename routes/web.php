<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/',[BlogController::class,'index'])->name('main');
Route::get('about',[BlogController::class,'about'])->name('about');
Route::get('information',[BlogController::class,'information'])->name('information');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::post('/login-user','LoginAction')->name('login.action');
    Route::get('/logout','logout')->name('logout');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
