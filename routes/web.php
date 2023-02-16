<?php

use App\Http\Controllers\ApplicationController;
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

//Route::get('/admin/dashboard' , function (){
//    return view('dashboard');
//});
Route::get('/api/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
Route::post('/api/users', [\App\Http\Controllers\Admin\UserController::class, 'store']);
Route::get('/api/users/search', [\App\Http\Controllers\Admin\UserController::class, 'search']);
Route::patch('/api/users/{user}/change-role', [\App\Http\Controllers\Admin\UserController::class, 'changeRole']);
Route::put('/api/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'update']);
Route::delete('/api/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy']);

Route::get('{view}', ApplicationController::class)->where('view','(.*)');

