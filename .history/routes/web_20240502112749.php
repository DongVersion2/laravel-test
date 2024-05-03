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

Route::get('/', function () 
{
    // return view('welcome');
    return view('home');
});

//theo kiểu submit form
Route::get('unicode', function () 
{
    // return view('welcome');
    return view('form');
});
Route::post('unicode', function() 
{
    return 'phương thức post của path /unicode';
});
Route::put('unicode', function()
{
    return 'phương thức put của path / unicode';
});