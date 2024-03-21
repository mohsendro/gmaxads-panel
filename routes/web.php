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
// +--------+-----------+-------------------+---------------+----------------------------------------------+--------------+
// | Domain | Method    | URI               | Name          | Action                                       | Middleware   |
// +--------+-----------+-------------------+---------------+----------------------------------------------+--------------+
// |        | GET|HEAD  | /                 |               | Closure                                      | web          |
// |        | GET|HEAD  | api/user          |               | Closure                                      | api,auth:api |
// |        | GET|HEAD  | users             | users.index   | App\Http\Controllers\UsersController@index   | web          |
// |        | POST      | users             | users.store   | App\Http\Controllers\UsersController@store   | web          |
// |        | GET|HEAD  | users/create      | users.create  | App\Http\Controllers\UsersController@create  | web          |
// |        | GET|HEAD  | users/{user}      | users.show    | App\Http\Controllers\UsersController@show    | web          |
// |        | PUT|PATCH | users/{user}      | users.update  | App\Http\Controllers\UsersController@update  | web          |
// |        | DELETE    | users/{user}      | users.destroy | App\Http\Controllers\UsersController@destroy | web          |
// |        | GET|HEAD  | users/{user}/edit | users.edit    | App\Http\Controllers\UsersController@edit    | web          |
// +--------+-----------+-------------------+---------------+----------------------------------------------+--------------+
Route::resource('user', 'UserController');
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('UsersIndex');
Route::get('user/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('UserShow');
Route::get('user/create', [App\Http\Controllers\UserController::class, 'create'])->name('UserCreate');
Route::get('user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->whereNumber('id')->name('UserEdit');
Route::get('user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->whereNumber('id')->name('UserDelete');

