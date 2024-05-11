<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class PageController extends Controller
{
    public function main(){
        return view('main');
    }
    public function detail(){
        return view('detail');
    }
    public function contact(){
        return view('contact');
    }
}
