<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
        $data['menuData'] = app('menus');   
        return view('website::pages.detail.index',$data);
    }
}