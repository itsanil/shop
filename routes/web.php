<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\ProductController;
  
  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::get(
        'profile',
        [HomeController::class, 'profile']
    )->name('profile');
    Route::post(
        'profile/update/{id}',
        [HomeController::class, 'profileUpdate']
    )->name('profile.update');

    Route::get(
        'setting',
        [HomeController::class, 'setting']
    )->name('setting');

    // Route::post(
    //     'setting/update/{id}',
    //     [HomeController::class, 'settingUpdate']
    // )->name('setting.update');
});

Route::group(['middleware' => ['role:Admin']], function () {
    //
});

Route::group(['middleware' => ['role:Shop']], function () {
    //
});