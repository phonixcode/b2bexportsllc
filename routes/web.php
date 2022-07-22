<?php

use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('about-us', [IndexController::class, 'about_us'])->name('about-us');
Route::get('industries', [IndexController::class, 'industries'])->name('industries');
Route::get('contact-us', [IndexController::class, 'contact_us'])->name('contact');
Route::get('data-destruction', [IndexController::class, 'data_destruction'])->name('data-destruction');
Route::get('end-of-life-cycle-processing', [IndexController::class, 'end_of_life_cycle_processing']);
Route::get('it-asset-remarketing', [IndexController::class, 'it_asset_remarketing']);
Route::get('it-disposition', [IndexController::class, 'it_disposition']);
Route::get('re-manufacturer', [IndexController::class, 're_manufacturer']);
Route::get('remarketing', [IndexController::class, 'remarketing']);

Route::prefix('admin')->group(function () {
    Route::middleware(['guest', 'prevent.back.history'])->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'login_submit'])->name('login.submit');
    });

    Route::group(['middleware' => 'auth', 'prevent.back.history'], function () {
        Route::get('/', function () {
            return view('back.dashboard');
        })->name('admin.dashboard');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
