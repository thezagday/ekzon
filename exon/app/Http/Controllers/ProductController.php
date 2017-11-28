<?php

namespace App\Http\Controllers;

use App\Product;
use App\PageMaterial;

class ProductController extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function products($id)
    {
        $product = Product::find($id);
        $pageMaterial = PageMaterial::where('link','/products')->first();

        return view('products',['product' => $product,'pageMaterial' => $pageMaterial]);
    }
}
