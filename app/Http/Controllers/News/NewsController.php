<?php

namespace App\Http\Controllers\News;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id', 'desc')->get();
        return view('news.index')->with('news', $news);
    }
}
