<?php

namespace App\Http\Controllers\Home;

use App\Apps;
use App\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $list = Articles::where(['is_delete'=>false,'app_id'=>$this->app('home')->id])->limit(5)->get();
        $apps = Apps::get();
        return view($this->app('home')->templet.'/index')->with(['list'=>$list,'app'=>$this->app('home'),'apps'=>$apps]);
    }
}
