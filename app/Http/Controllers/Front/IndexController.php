<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{
    public function index(){
    	return view('front.index');
    }

}
