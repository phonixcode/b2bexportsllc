<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\BannerController;
use App\Http\Controllers\Back\ServiceController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\FacilityController;
use App\Http\Controllers\Back\IndustriesController;

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

Route::prefix('admin')->group(function () {
    Route::middleware(['guest', 'prevent.back.history'])->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'login_submit'])->name('login.submit');
    });

    Route::group(['middleware' => 'auth', 'prevent.back.history'], function () {
        Route::get('/', function () {
            return view('back.dashboard');
        })->name('admin.dashboard');


        Route::resource('banners', BannerController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('facilities', FacilityController::class);
        Route::resource('industries', IndustriesController::class);

        Route::get('settings', [SettingController::class, 'settings'])->name('settings');
        Route::get('profile', [SettingController::class, 'profile'])->name('profile');
        Route::put('settings', [SettingController::class, 'updateSettings'])->name('settings.update');
        Route::put('profile', [SettingController::class, 'updateProfile'])->name('profile.update');
        Route::put('history', [SettingController::class, 'updateHistory'])->name('history.update');
        Route::put('news', [SettingController::class, 'updateBlog'])->name('blog.update');
        Route::put('abt', [SettingController::class, 'updateAbt'])->name('abt.update');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});

Route::get('/{page_slug}', [IndexController::class, 'viewPage'])->name('view.page');
