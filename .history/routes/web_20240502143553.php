<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
// Route::get('unicode', function () 
// {
//     return view('form');
// });
// Route::post('unicode', function() 
// {
//     return 'phương thức post của path /unicode';
// });
// Route::put('unicode', function()
// {
//     return 'phương thức put của path / unicode';
// });
// Route::delete('unicode', function()
// {
//     return 'phương thức delete của path / unicode';
// });
// Route::patch('unicode', function()
// {
//     return 'phương thức put của patch / unicode';
// });
// Route::match(['get', 'post'], 'unicode', function()
// {
//    return $_SERVER['REQUEST_METHOD'];
// });
Route::get('show-form', function()
{
   return view('form');
});


// database
Route::get('/test-data', function()
{
    // $user = new User();
    // $allUser = $user::all();
    // dd($allUser);
});
