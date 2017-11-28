<?php

namespace App\Http\Controllers;

use App\Document;
use App\PageMaterial;
use App\Form;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

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
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
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

        $products_id = Form::all()->pluck('product');
        $products = DB::table('products')->whereIn('id',$products_id)->get();
        
        $documents = Document::all();
        
        return view('home',['pageMaterial' => $pageMaterial, 'products' => $products,'documents' => $documents]);
    }
}
