<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
    
        return response()->json($banners);
    }
}
