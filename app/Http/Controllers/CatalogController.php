<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\CatalogMaterial;
use App\Product;
use App\SocialYearBanner;
use Illuminate\Http\Request;
use App\PageMaterial;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function catalog(Request $request, $id = null)
    {
        $parentCatalogs = Catalog::where('parent',0)->get();
        $pageMaterial = PageMaterial::where('link','like','/catalog')->first();
        $banner = SocialYearBanner::find(1)->banner;

        if ($id) {
            if ($_SESSION['lang'] == 'RU') {
                if ($request->input('sort') && $request->input('sort') == 'asc') {
                    $products = DB::table('products')
                        ->where('category',$id)
                        ->orderBy('title_ru','asc')
                        ->get();
                } elseif ($request->input('sort') && $request->input('sort') == 'desc') {
                    $products = DB::table('products')
                        ->where('category',$id)
                        ->orderBy('title_ru','desc')
                        ->get();
                } else {
                    $products = Catalog::find($id)->products;
                }
            } else {
                if ($request->input('sort') && $request->input('sort') == 'asc') {
                    $products = DB::table('products')
                        ->where('category',$id)
                        ->orderBy('title_en','asc')
                        ->get();
                } elseif ($request->input('sort') && $request->input('sort') == 'desc') {
                    $products = DB::table('products')
                        ->where('category',$id)
                        ->orderBy('title_en','desc')
                        ->get();
                } else {
                    $products = Catalog::find($id)->products;
                }
            }


            $material = CatalogMaterial::where('parent',$id)->first();
        } else {
            /*SORT HERE*/
            if ($_SESSION['lang'] == 'RU') {
                if ($request->input('sort') && $request->input('sort') == 'asc') {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products->sortBy('title_ru');
                } elseif($request->input('sort') && $request->input('sort') == 'desc') {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products->sortByDesc('title_ru');
                } else {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products;
                }
            } else {
                if ($request->input('sort') && $request->input('sort') == 'asc') {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products->sortBy('title_en');
                } elseif($request->input('sort') && $request->input('sort') == 'desc') {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products->sortByDesc('title_en');
                } else {
                    $products = $parentCatalogs->first()->subCatalogs->first()->products;
                }
            }
            //TODO обработать ситуацию ниже по другому
            //если в первом подкаталоге нет продуктов , то выводить материал с parent = 1
            if ($parentCatalogs->first()->subCatalogs->first()->products->first()) {
                $parent = $parentCatalogs->first()->subCatalogs->first()->products->first()->parentCategory->id;
                $material = CatalogMaterial::where('parent',$parent)->first();
            } else {
                $material = CatalogMaterial::where('parent',1)->first();
            }
        }

        return view('catalog',[
            'parentCatalogs' => $parentCatalogs,
            'pageMaterial' => $pageMaterial,
            'products' => $products,
            'material' => $material,
            'banner' => $banner,
            'id' => $id,
            'sort' => $request->input('sort'),
        ]);
    }
}
