<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return '这里是我的博客';
    }
    public function about()
    {
        return '每一天让自己进步一点点';
    }
}
