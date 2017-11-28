<?php

namespace App\Http\Controllers;

use App\NewsSlider;
use Illuminate\Http\Request;
use App\News;
use App\PageMaterial;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function news(Request $request)
    {
        if ($request->input('sort') && ($request->input('sort') == 'fresh')) {
            $news = DB::table('news')->where('sharer','0')->orderBy('date','desc')->paginate(5)->withPath('news?sort=fresh');
        } elseif ($request->input('sort') && ($request->input('sort') == 'early')) {
            $news = DB::table('news')->where('sharer','0')->orderBy('date','asc')->paginate(5)->withPath('news?sort=early');
        } else {
            $news = News::where('sharer','0')->paginate(5);
        }
        $pageMaterial = PageMaterial::where('link','/news')->first();

        return view('news',['news' => $news,'pageMaterial' => $pageMaterial,'sort' => $request->input('sort')]);
    }

   public function newsSharer(Request $request)
    {
        if ($request->input('sort') && ($request->input('sort') == 'fresh')) {
            $news = DB::table('news')->where('sharer','1')->orderBy('date','desc')->paginate(5)->withPath('news/sharer?sort=fresh');
        } elseif ($request->input('sort') && ($request->input('sort') == 'early')) {
            $news = DB::table('news')->where('sharer','1')->orderBy('date','asc')->paginate(5)->withPath('news/sharer?sort=early');
        } else {
            $news = News::where('sharer','1')->paginate(5);
        }
        $pageMaterial = PageMaterial::where('link','/news')->first();

        return view('news-sharer',['news' => $news,'pageMaterial' => $pageMaterial,'sort' => $request->input('sort')]);
    }

    public function newsPage($id)
    {
        $news = News::find($id);
        $pageMaterial = PageMaterial::where('link','/news')->first();
        return view('news-page',['news' => $news,'pageMaterial' => $pageMaterial]);
    }
}
