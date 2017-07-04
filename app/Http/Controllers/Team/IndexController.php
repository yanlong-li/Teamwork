<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view($this->app('team')->templet.'/index');
    }
    public function docs(){
        return 'docs正在建设中';
    }
}
