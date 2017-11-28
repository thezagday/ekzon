<?php

namespace App\Http\Controllers;

use App\NewsSlider;
use Illuminate\Http\Request;
use App\News;
use App\PageMaterial;

class NewsController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    public function news()
    {
        $news = News::all();
        $pageMaterial = PageMaterial::where('link',$_SERVER['REQUEST_URI'])->first();

        return view('news',['news' => $news,'pageMaterial' => $pageMaterial]);
    }
    public function newsPage($id)
    {
        $news = News::find($id);
        $pageMaterial = PageMaterial::where('link','/news')->first();
        return view('news-page',['news' => $news,'pageMaterial' => $pageMaterial]);
    }
}
