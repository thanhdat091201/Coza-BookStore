<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index1()
    {
        return view('admin.home', [
            'tittle' => 'Trang Quản Trị Admin'
        ]);
    }
}
