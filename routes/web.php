<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestableController;
use Illuminate\Support\Facades\Route;


Route::get('testable', [TestableController::class, 'index'])->middleware('auth');

include('exceptions.php');

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('contact', function () {
    return view('front.contact');
})->name('contact');

Route::post('forms/{form}', [FormController::class, 'distribute'])->name('form');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/aboleon-framework.php';
