<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Registration;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [DemoController::class, 'index']);
// Route::get('/about', SingleActionController::class);
Route::get('/register', [Registration::class, 'index']);
Route::post('/register', [Registration::class, 'register']);
Route::get('/customer',function(){
  $customers= Customer::all();
  echo "<pre>";
  print_r($customers);
});


Route::get('/customer/register', [CustomerController::class, 'create'])->name('customer.register');
Route::post('/customer/register', [CustomerController::class, 'store'])->name('customer.store');
