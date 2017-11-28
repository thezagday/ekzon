<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\CatalogMaterial;
use App\Product;
use Illuminate\Http\Request;
use App\PageMaterial;

class CatalogController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    public function catalog($id = null)
    {
        $parentCatalogs = Catalog::where('parent',0)->get();
        $pageMaterial = PageMaterial::where('link','like','/catalog')->first();

        if ($id) {
            $products = Catalog::find($id)->products;
            $material = CatalogMaterial::where('parent',$id)->first();
        } else {
            $products = $parentCatalogs->first()->subCatalogs->first()->products;
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
            'material' => $material
        ]);
    }
}
