<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //action index
    public function index()
    {

    }

    // action getNews
    public function getNews()
    {
        return 'Danh sách tin tức';
    }

    //get categories
    public function getCategories()
    {
        return 'Chuyên mục';
    }
}
