<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\News;
use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\SecondSlider;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function lang()
    {
        $_SESSION['lang'] == "RU" ? $_SESSION['lang'] = "EN":$_SESSION['lang'] = "RU";
        return redirect()->action("FrontController@main");
    }
    public function main()
    {
        /* TODO В зависимости от сессии брать данные  */

        $slider = Slider::all();
        $secondSlider = SecondSlider::all();
        $parentCatalogs = Catalog::where('parent',0)->take(3)->get();

        $new_products = DB::table('products')->orderBy('id','DESC')->take(4)->get();

        $news = DB::table('news')->where('sharer',0)->orderBy('date','DESC')->take(4)->get();

        $material = DB::table('main_materials')->first();

        return view ('main',[
            'slider' => $slider,
            'secondSlider' => $secondSlider,
            'parentCatalogs' => $parentCatalogs,
            'new_products' => $new_products,
            'news' => $news,
            'material' => $material
        ]);
    }
}
