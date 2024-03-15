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
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('UserIndex');
Route::get('list', [App\Http\Controllers\UserController::class, 'list'])->name('Userlist');
Route::get('read', [App\Http\Controllers\UserController::class, 'read'])->name('UserRead');
Route::get('create', [App\Http\Controllers\UserController::class, 'create'])->name('UserCreate');
Route::get('update/{id}', [App\Http\Controllers\UserController::class, 'update'])->whereNumber('id')->name('UserUpdate');
Route::get('delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->whereNumber('id')->name('UserDelete');