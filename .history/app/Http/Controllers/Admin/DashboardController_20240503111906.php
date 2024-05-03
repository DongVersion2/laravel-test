<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //nếu muốn tác động tới tất cả các action trong controller; luôn luôn tự động chạy đầu tiên
    public function __construct()
    {
        return 'Khởi ododnjg dashboard';
    }
    public function index()
    {
        return '<h2>Dashboard Wellcome</h2>';
    }
}
