<?php

namespace App\Http\Controllers;

use App\Apps;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //这个控制器表示首页
    public function index()
    {
        //查询默认应用，如果没有则为
        $index = Apps::where(['is_default'=>true])->get();
//        dd();
        if(count($index)==0)
        {
            $index = new Apps();
            $index->id=1;
            $index->name='Yanlongli';
            $index->description='这是Yanlongli首页导航站';
            $index->url='home';
            $index->admin='admin';
            $index->status=true;
            $index->is_default=1;
            $index->templet='default';
            $index->author='Yanlongli';
            $index->save();
            $index = Apps::where(['is_default'=>true])->get();
        }elseif(!$index[0]->status){
            $index[0]->status=true;
            $index->save();
        }

        return \Redirect::to($index[0]->url);

    }
}
