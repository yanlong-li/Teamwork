<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('team/index');
    }
}
