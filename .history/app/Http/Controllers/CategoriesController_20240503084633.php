<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        
    }

    //hiển thị danh sách chuyên mục (method get)
    public function index()
    {
        return view('clients/categories/list')
    }

    //lấy ra 1 chuyên mục theo id (method get)
    public function getCategory($id)
    {
        return 'Chi tiết chuyên mục: '.$id;
    }

    //cập nhật 1 chuyên mục(method post)
    public function updateCategory($id)
    {

    }

    //show form thêm dữ liệu (method get)
    public function addCategory()
    {
        return 'Form thêm chuyên mục';
    }

    //thêm dữ liệu vào chuyên mục(method post)
    public function handleAddCategory()
    {

    }

    //xóa dữ liệu (method delete)
    public function deleteCategory()
    {

    }
}
