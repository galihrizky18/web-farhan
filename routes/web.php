<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticateLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/account', [LoginController::class, 'storeUser']);

Route::get('/account', function () {
    return view('account');
})->name('register');


Route::middleware('auth')->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/', [AdminController::class, 'dashboard']);
        Route::get('/profil', [AdminController::class, 'profile']);
        Route::post('/update-profil', [AdminController::class, 'updateProfile']);
    });
});


