<?php

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
    return view('welcome');
});
Route::get('/{id}/{name}', function (string $id, string $name) {
    return $id. ' '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('user/{id?}', function ($id = null) {
    if (!$id) {
        return "Xin mời nhập id";
    }

    return "User id: $id";
});

Route::prefix('users')->name('user.')->group(function () {
    Route::get('profile', function () {
        return 'ads';
    })->name('profile');

    Route::get('setting', function () {
        return '12';
    })->name('setting');
});

Route::get('/name', function () {
    return '2adad';
})->name('names');

Route::get('/zz', function () {
    return redirect()->route('names');
});