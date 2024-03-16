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

// Route::any('/test/{id}', function ($id) {
//     return 'Hello World' . $id;
// });
// Route::get('/welcome', function() {
//     return View('welcome');
// })->middleware('auth', 'role:administrator|editor')->name('welcome');

// Authonticate
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Users
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('UsersIndex');
Route::get('user/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('UserShow');
Route::get('user/create', [App\Http\Controllers\UserController::class, 'create'])->name('UserCreate');
Route::get('user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->whereNumber('id')->name('UserEdit');
Route::get('user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->whereNumber('id')->name('UserDelete');