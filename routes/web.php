<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin',[AdminController::class,'index']);
Route::post('/login',[AdminController::class, 'login']);
Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/session', function(){
  echo "<pre>";
  print_r(session()->all());
});

Route::get('/logout', function(){
  session()->flush();
});