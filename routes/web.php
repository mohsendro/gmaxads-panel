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

// Recource
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

// Route::get('/test/{id}', function() {
//     return View('welcome', [$id]);
// })->middleware('auth', 'CheckRole:administrator|editor')->name('welcome');

// Authonticate
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::resource('/google-packages', 'App\Http\Controllers\Administrator\GooglePackagesController')->names([
    'index'   => 'GooglePackages.index',
    'create'  => 'GooglePackages.create',
    'store'   => 'GooglePackages.store',
    'show'    => 'GooglePackages.show',
    'edit'    => 'GooglePackages.edit',
    'update'  => 'GooglePackages.update',
    'destroy' => 'GooglePackages.destroy',
]);


// Route::resource('users', 'App\Http\Controllers\Administrator\UserController');
// Route::get('user', [App\Http\Controllers\Administrator\UserController::class, 'index'])->name('UsersIndex');