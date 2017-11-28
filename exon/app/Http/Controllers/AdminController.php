<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Catalog;
use App\CatalogMaterial;
use App\MainProduct;
use App\News;
use App\NewsSlider;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Test\CodeCleaner\FinalClassPassTest;

class AdminController extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function admin()
    {
        return view('admin.home');
    }

    public function parents()
    {
        $parents = Catalog::where('parent',0)->get();

        return view ('admin.parents.parents',['parents' => $parents]);
    }
    public function addParent(Request $request)
    {
        if (!$request->all()) {
            return view('admin.parents.add-parent');
        } else {
            $id = DB::table('catalogs')->insertGetId([
                'title_ru' => $request->input('title_ru'),
                'title_en' => $request->input('title_en'),
                'parent' => 0
            ]);
            DB::table('catalog_materials')->insert([
                'title_ru' => $request->input('material_title_ru'),
                'title_en' => $request->input('material_title_en'),
                'short_ru' => $request->input('material_short_ru'),
                'short_en' => $request->input('material_short_en'),
                'text_ru' => $request->input('material_text_ru'),
                'text_en' => $request->input('material_text_en'),
                'parent' => $id
            ]);
            return redirect()->action('AdminController@parents');
        }
    }
    public function editParent(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.parents.edit-parent',['catalog' => Catalog::find($id)]);
        } else {
            DB::table('catalogs')->where('id',$request->id)->update([
                'title_ru' => $request->input('title_ru'),
                'title_en' => $request->input('title_en'),
                'parent' => 0
            ]);
            DB::table('catalog_materials')->where('parent',$request->id)->update([
                'title_ru' => $request->input('material_title_ru'),
                'title_en' => $request->input('material_title_en'),
                'short_ru' => $request->input('material_short_ru'),
                'short_en' => $request->input('material_short_en'),
                'text_ru' => $request->input('material_text_ru'),
                'text_en' => $request->input('material_text_en'),
            ]);
            return redirect()->action('AdminController@parents');
        }
    }
    public function deleteParent($id)
    {
        Catalog::find($id)->delete();
        CatalogMaterial::where('parent',$id)->delete();
        return redirect()->action('AdminController@parents');
    }
    
    public function children($id)
    {
        $children = Catalog::where('parent',$id)->get();

        return view('admin.children.children',['children' => $children,'parent' => $id]);
    }
    public function addChild(Request $request, $parent = null)
    {
        if (!$request->all()) {
            return view('admin.children.add-child',['parent' => $parent]);
        } else {
            $id = DB::table('catalogs')->insertGetId([
                'title_ru' => $request->input('title_ru'),
                'title_en' => $request->input('title_en'),
                'parent' => $parent
            ]);
            DB::table('catalog_materials')->insert([
                'title_ru' => $request->input('material_title_ru'),
                'title_en' => $request->input('material_title_en'),
                'text_ru' => $request->input('material_text_ru'),
                'text_en' => $request->input('material_text_en'),
                'parent' => $id
            ]);
            return redirect()->route('children',['id' => $parent]);
        }
    }
    public function editChild(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            $parents = Catalog::where('parent',0)->get();
            $catalog = Catalog::find($id);
            $parent = $catalog->parent;
            return view('admin.children.edit-child',['catalog' => $catalog, 'parents' => $parents, 'parent' => $parent]);
        } else {
            DB::table('catalogs')->where('id',$request->id)->update([
                'title_ru' => $request->input('title_ru'),
                'title_en' => $request->input('title_en'),
                'parent' => $request->input('parent'),
            ]);
            DB::table('catalog_materials')->where('parent',$request->id)->update([
                'title_ru' => $request->input('material_title_ru'),
                'title_en' => $request->input('material_title_en'),
                'text_ru' => $request->input('material_text_ru'),
                'text_en' => $request->input('material_text_en'),
            ]);
            return redirect()->route('children',['id' => $request->input('parent')]);
        }
    }
    public function deleteChild($id)
    {
        $catalog = Catalog::find($id);
        $parent = $catalog->parent;
        $catalog->delete();
        CatalogMaterial::where('parent',$id)->delete();

        return redirect()->route('children',['id' => $parent]);
    }

    public function readProducts($id)
    {
        $products = Product::where('category',$id)->get();
        return view('admin.products.read-products',['products' => $products,'category' => $id]);
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $img = $product->img;
        $category = $product->category;
        $product->delete();
        MainProduct::where('product_id',$id)->first()->delete();

        if ($img != null) {
            if (! DB::table('products')->where('img','like',$img)->first()) {
                if (file_exists(public_path().$img)) {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->route('read-products', ['id' => $category]);
    }

    public function readNews()
    {
        return view('admin.news.read-news',['news' => News::all()]);
    }
    public function deleteNews($id)
    {
        $news = News::find($id);

        foreach ($news->images as $item) {
            $item->delete();
            if ($item->img != null) {
                if (! DB::table('news_sliders')->where('img','like',$item->img)->first()) {
                    if (file_exists(public_path().$item->img)) {
                        unlink(public_path().$item->img);
                    }
                }
            }
        }

        $img = $news->default_img;
        $news->delete();
        if ($img != null) {
            if (! DB::table('news')->where('default_img','like',$img)->first()) {
                if (file_exists(public_path().$img)) {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@readNews');
    }

    public function deleteNewsSlide($id)
    {
        $slide = NewsSlider::find($id);
        $img = $slide->img;
        $parent = $slide->parent;
        $slide->delete();
        if ($img != null) {
            if (! DB::table('news_sliders')->where('img','like',$img)->first()) {
                if (file_exists(public_path().$img)) {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->route('edit-news',['id' => $parent]);
    }

    public function readSlider()
    {
        $sliders = Slider::all();
        return view('admin.slider.read-slider',['sliders' => $sliders]);
    }
    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $img = $slider->img;
        $slider->delete();
        if ($img != null)
        {
            if (! DB::table('sliders')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@readSlider');
    }

    public function readBrands()
    {
        $images = Brands::all();
        return view('admin.brands.read-brands',['images' => $images]);
    }
    public function deleteBrand($id)
    {
        $brand = Brands::find($id);
        $img = $brand->img;
        $brand->delete();
        if ($img != null) {
            if (! DB::table('brands')->where('img','like',$img)->first()) {
                if (file_exists(public_path().$img)) {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@readBrands');
    }

    public function readAllProducts()
    {
        $arr = array();
        $allProducts = Product::all();
        $mainProductsIds = DB::table('main_products')->pluck('product_id');
        foreach ($mainProductsIds as $item) {
            $arr[] = $item;
        }

        return view('admin.main_products.read-all-products',['allProducts' => $allProducts , 'mainProductsIds' => $arr]);
    }

    public function addProductMainPage(Request $request)
    {
        if ($request->input('products')) {
            foreach ($request->input('products') as $id) {
                if (!MainProduct::where('product_id',$id)->first()) {
                    $product = Product::find($id);
                    DB::table('main_products')->insert([
                        'product_id' => $product->id,
                        'main_catalog' => Catalog::find($product->category)->parent,
                    ]);
                }
            }
        }
        return redirect()->action('AdminController@readAllProducts');
    }
    public function delProductMainPage(Request $request)
    {
        if ($request->input('products')) {
            foreach ($request->input('products') as $id) {
                MainProduct::where('product_id',$id)->delete();
            }
        }
        return redirect()->action('AdminController@readAllProducts');
    }
}
