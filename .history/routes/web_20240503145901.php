<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
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




// BẮT ĐẦU BÀI 6
//client routes

Route::get('/', function ()
{
    // return '<h1>Trang chủ Phan Đông</h1>';
    return view('home');
})->name('home');

Route::prefix('categories')->group(function () {
    //danh sách chuyên mục
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    //lấy chi tiết 1 chuyên mục (áp dụng show form sửa chuyên mục)
    Route::get('/eidt/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    //xử lí update chuyên mục
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    //hiện thị form add dữ liệu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    //xử lí thêm chuyên mục
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    //xóa chuyên mục
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});


//admin routes
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('', [DashboardController::class, 'index']);
    Route::resource('products', Admin\ProductsController::class)->middleware('auth.admin.product');
});
