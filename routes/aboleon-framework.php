<?php

use Aboleon\MetaFramework\Accessors\Routing;
use Aboleon\MetaFramework\Controllers\AjaxController;
use App\Http\Controllers\AppOwnerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

# Ajax protected
Route::post('ajax', [AjaxController::class, 'distribute'])->name('ajax')->middleware('auth');


Route::prefix(Routing::backend())
    ->name('aboleon-framework.')
    ->middleware([
        'web',
        'auth',
        'roles:' . (new User())->adminUsers()->pluck('id')->join('|')
    ])->group(function () {

        # Dashboard
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        # App Owner
        Route::resource('appowner', AppOwnerController::class);

        # Users
        Route::get('role', [RoleController::class, 'index'])->name('roles');
        Route::get('users/oftype/{role}', [UserController::class, 'index'])->name('users.index');
        Route::get('users/oftype/{role}/archived', [UserController::class, 'index'])->name('users.archived');
        Route::get('users/create/{role}', [UserController::class, 'create'])->name('users.create_type');
        Route::resource('users', UserController::class)->except('index');

        // Settings
        Route::prefix('settings')->name('settings.')->group(function() {
            Route::get('show', [SettingsController::class, 'index'])->name('index');
            Route::post('update', [SettingsController::class, 'update'])->name('update');
        });
    });
