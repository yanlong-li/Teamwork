<?php

namespace App\Http\Controllers;

use App\Apps;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //const PATH_INFO = $_SERVER['PATH_INFO'];
    public function app($scode)
    {
        $apps = Apps::where(['scode'=>$scode])->get();
        if($apps && count($apps)>0)
        {
            return $apps[0];
        }
        return;
    }
}
