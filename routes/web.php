<?php

use App\Http\Controllers\Admin\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function() {
    Route::get('login',[AdminController::class,'adminLogin'])->name('login');
    Route::post('auth-admin',[AdminController::class,'loginAdmin']);

    Route::group(['middleware' => ['auth:admin']], function() {
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('logout',[AdminController::class,'logout']);

        Route::get('Profile',[AdminController::class,'adminProfile']);
        Route::post('ProfileUpdate',[AdminController::class,'adminUpdate'])->name('adminUpdate');
        Route::post('password-change',[AdminController::class,'changePass']);
    });
});


