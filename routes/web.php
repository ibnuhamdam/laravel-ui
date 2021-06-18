<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function () {
    return view('admin.index');
});

// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     });
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('admin.index');
})->name('home');

Route::get('/dashboard', function () {
    return "dashboard";
});
