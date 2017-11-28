<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function search(Request $request)
    {
        if ($_SESSION['lang'] == 'RU') {
            $search = DB::table('products')->where('title_ru','like',"%{$request->input('search')}%")->get();
        } else {
            $search = DB::table('products')->where('title_en','like',"%{$request->input('search')}%")->get();
        }
        $count = count($search);

        return view('search',['search' => $search,'count' => $count]);
    }
}