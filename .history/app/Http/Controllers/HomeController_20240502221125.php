<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //action index
    public function index()
    {

    }

    // action getNew
    public function getNews()
    {
        return 'Danh sách tin tức';
    }
    
}
