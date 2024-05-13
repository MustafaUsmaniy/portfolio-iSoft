<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class PageController extends Controller
{
    public function main(){
        $posts = Post::all();
        return view('main')->with('posts', $posts);
    }
    public function detail(){
        return view('detail');
    }
    public function contact(){
        return view('contact');
    }
}
