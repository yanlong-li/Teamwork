<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class PhotoController extends Controller
{
    //todo echo
    public function index()
    {
//        echo Redis::get(1);
        echo Cache::get(1);
        echo "这里是用来打酱油的";
    }
}
