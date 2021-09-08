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

Route::get('/todos', [App\Http\Controllers\TodosController::class, 'index']);
Route::get('/todos/new', [App\Http\Controllers\TodosController::class, 'new']);
Route::post('/todos', [App\Http\Controllers\TodosController::class, 'create']);