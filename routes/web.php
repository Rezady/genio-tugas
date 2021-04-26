<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthLogin;

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

Route::middleware(['authLogin'])->group(function () {
    
    Route::get('/', 'StaffController@index');

    Route::get('/user', 'UsersController@index');

    Route::get('/deletestaff/{id}', 'StaffController@deleteStaff');

    Route::get('/deleteuser/{id}', 'UsersController@deleteUser');

    Route::get('/logout', 'LogoutController@index');

    Route::post('/inputstaff', 'StaffController@inputStaff');

    Route::post('/updatestaff/{id}', 'StaffController@updateStaff');

    Route::post('/inputuser', 'UsersController@inputUser');

    Route::post('/updateuser/{id}', 'UsersController@updateUser');
});

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@login');