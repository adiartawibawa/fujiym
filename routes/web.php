<?php

use App\Http\Controllers\Roles\RoleController;
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

Route::view('/app', 'app');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Roles & Permissions
    Route::get('roles/reload-permissions/{id}', [RoleController::class, 'reloadPermissions'])->name('roles.update');
    Route::get('roles/reload-permissions', [RoleController::class, 'reloadPermissions'])->name('roles.update');
    Route::resource('roles', RoleController::class);
});
