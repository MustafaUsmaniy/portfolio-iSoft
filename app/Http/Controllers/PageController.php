<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
