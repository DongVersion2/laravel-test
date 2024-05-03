<?php

use Illuminate\Support\Facades\Route;
// use App\Models\User;
use Illuminate\Http\Request;

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
Route::get('tin-tuc/{slug}-{id}.html', function ($slug, $id) {
    $content = 'nội dung slug ';
    $content .= 'id = ' . $id . '<br>';
    $content .= 'slug = ' . $slug;
    return $content;
    //valiadate
})->where('id','[0-9]+')->where('slug', '.+');
// })->where(
//     [
//         // 'slug' => '[a-z-]+',
//         'slug' => '.+',
//         'id' => '[0-9]+'
//     ]
// );










// database
Route::get('/test-data', function () {
    // $user = new User();
    // $allUser = $user::all();
    // dd($allUser);
});
