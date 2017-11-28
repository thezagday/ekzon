<?php

namespace App\Http\Controllers;

use App\PageMaterial;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        session_start();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageMaterial = PageMaterial::where('link',$_SERVER['REQUEST_URI'])->first();
        $products = Product::all();
        
        return view('home',['pageMaterial' => $pageMaterial, 'products' => $products]);
    }
}
