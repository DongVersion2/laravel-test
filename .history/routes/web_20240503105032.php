<?php

// use Illuminate\Support\Facades\Route;
// // use App\Models\User;
// use Illuminate\Http\Request;
// // use App\Http\Controllers\HomeController;
// use App\Http\Controllers\CategoriesController;
// // use App\Http\Controllers\Admin\ProductsController;
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


//admin routes
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductsController::class);
});
