<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

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





Auth::routes();


//rotta pubblica


Route::get('/home', 'PublicController@index')->name('public.shoes.home');

Route::get('chart-js', 'ChartController@index');

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::resource('/shoes', ShoesController::class);
    return view('create');
});
