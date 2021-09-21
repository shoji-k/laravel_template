<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

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

Route::resource('todos', App\Http\Controllers\TodoController::class)
    ->except(['show']);

Route::get('/api/customers', [CustomerController::class, 'index']);
Route::post('/api/customers', function () {});
Route::get('/api/customers/{id}', function () {});
Route::put('/api/customers/{id}', function () {});
Route::delete('/api/customers/{id}', function () {});

Route::get('/api/reports', function () {});
Route::post('/api/reports', function () {});
Route::get('/api/reports/{id}', function () {});
Route::put('/api/reports/{id}', function () {});
Route::delete('/api/reports/{id}', function () {});
