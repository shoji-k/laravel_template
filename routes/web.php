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

Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');;
Route::post('/orders/store', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');;
Route::get('/orders/success', function () {
    return 'success';
});
Route::get('/orders/cancel', function () {
    return 'cancel';
});

Route::get('/register/create',  [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.create');
Route::post('/register/store',  [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest')
    ->name('register.store');
Route::get('/register/complete', function () {
    return view('register.complete');
})->name('register.complete');

Route::get('/login',  [App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login',  [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest')
    ->name('login.authenticate');

Route::get('/api/customers', [CustomerController::class, 'index']);
Route::post('/api/customers', [CustomerController::class, 'store']);

Route::get('/api/customers/{id}', function () {
});
Route::put('/api/customers/{id}', function () {
});
Route::delete('/api/customers/{id}', function () {
});

Route::get('/api/reports', function () {
});
Route::post('/api/reports', function () {
});
Route::get('/api/reports/{id}', function () {
});
Route::put('/api/reports/{id}', function () {
});
Route::delete('/api/reports/{id}', function () {
});
