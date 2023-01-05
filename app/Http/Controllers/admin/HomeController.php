<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $total_blog = '';
        return view('admin.pages.dashboard', compact('total_blog'));
    }
}
