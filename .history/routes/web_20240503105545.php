<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsControllersssssssssssssssssssssssss;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// })->name('homes');

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

//nhận nhiều request
// Route::match(['get', 'post'], 'unicode', function()
// {
//    return $_SERVER['REQUEST_METHOD'];
// });

// Route::get('show-form', function()
// {
//    return view('form');
// });

//nhận tất cả các request
// Route::any('unicode', function(Request  $request)
// {
//     return $request->method();
// });

//nhận request và sau đó chuyển hướng path
// Route::redirect('unicode', 'https://laravel.com/');

//nhóm các route lại 
// Route::prefix('admin')->group(function () 
// {
//     Route::get('show-form-1', function()
// {
//    return view('form');
// });
// Route::get('show-form-2', function()
// {
//    return view('form');
// });
// });

//route có tham số
//tham số có điều kiện k bắt buộc
// Route::get('tin-tuc/{id?}', function($id=null)
//tham số có điều kiện bắt buộc
// Route::get('tin-tuc/{slug?}-{id?}.html', function ($slug=null, $id=null) {
//     $content = 'nội dung slug ';
//     $content .= 'id = ' . $id . '<br>';
//     $content .= 'slug = ' . $slug;
//     return $content;
//     //valiadate
// })->where('id','[0-9]+')->where('slug', '.+')->name('tintuc');
// // hoặc cách khác
// // })->where(
// //     [
// //         // 'slug' => '[a-z-]+',
// //         'slug' => '.+',
// //         'id' => '[0-9]+'
// //     ]
// // );
// Route::get('show-form', function(){
//     return view('form');
// });

// Route::prefix('products')->middleware('checkpermission')->group(function ()
// {
//     Route::get('/', function()
//     {
//         return 'Danh sách sản phẩm';
//     });
//     Route::get('add', function()
//     {
//         return 'Thêm sản phẩm';
//     });
//     Route::get('edit', function()
//     {
//         return 'Sửa sản phẩm';
//     });
// });

// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::get('/tin-tuc', 'HomeController@getNews')->name('news');

// Route::get('/chuyen-muc', [HomeController::class, 'getCategories']);

// HẾT BÀI 5




// // database
// Route::get('/test-data', function () {
//     // $user = new User();
//     // $allUser = $user::all();
//     // dd($allUser);
// });


// BẮT ĐẦU BÀI 6
//client routes
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
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductsController::class);
});
