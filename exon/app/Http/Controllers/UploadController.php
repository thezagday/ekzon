<?php

namespace App\Http\Controllers;

use App\MainProduct;
use App\News;
use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Illuminate\Support\Facades\DB;
use App\Slider;

class UploadController extends Controller
{
    public function addProduct(Request $request, $category = null)
    {
        $parents = Catalog::where('parent','<>',0)->get();
        if (!$request->all()) {
            return view('admin.products.add-product',['parents' => $parents, 'category' => $category]);
        } elseif ($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path().'/images/products',$file->getClientOriginalName());
            $img = '/images/products/'.$file->getClientOriginalName();
        } else {
            $img = '';
        }

        DB::table('products')->insert([
            'img' => $img,
            'title_ru' =>$request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'reg_ru' => $request->input('reg_ru'),
            'reg_en' => $request->input('reg_en'),
            'name_ru' => $request->input('name_ru'),
            'name_en' => $request->input('name_en'),
            'inter_name' => $request->input('inter_name'),
            'short_desc_ru' => $request->input('short_desc_ru'),
            'short_desc_en' => $request->input('short_desc_en'),
            'appointment_ru' => $request->input('appointment_ru'),
            'appointment_en' => $request->input('appointment_en'),
            'volume' => $request->input('volume'),
            'recipe' => $request->input('recipe'),
            'desc_ru' => $request->input('desc_ru'),
            'desc_en' => $request->input('desc_en'),
            'isNew' => $request->input('isNew'),
            'category' => $request->input('category'),
        ]);
        return redirect()->route('read-products', ['id' => $request->input('category')]);
    }
    public function editProduct(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.products.edit-product',['product' => Product::find($id), 'parents' => Catalog::where('parent','<>',0)->get()]);
        } else {
            $product = Product::find($request->id);
            $mainProduct = MainProduct::where('product_id',$request->id)->first();
         
            if ($request->hasFile('img'))
            {
                $img = $product->img;

                $file = $request->file('img');
                $file->move(public_path() . '/images/products',$file->getClientOriginalName());
                $product->update([
                    'img' => '/images/products/'.$file->getClientOriginalName(),
                    'title_ru' =>$request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'reg_ru' => $request->input('reg_ru'),
                    'reg_en' => $request->input('reg_en'),
                    'name_ru' => $request->input('name_ru'),
                    'name_en' => $request->input('name_en'),
                    'inter_name' => $request->input('inter_name'),
                    'short_desc_ru' => $request->input('short_desc_ru'),
                    'short_desc_en' => $request->input('short_desc_en'),
                    'appointment_ru' => $request->input('appointment_ru'),
                    'appointment_en' => $request->input('appointment_en'),
                    'volume' => $request->input('volume'),
                    'recipe' => $request->input('recipe'),
                    'desc_ru' => $request->input('desc_ru'),
                    'desc_en' => $request->input('desc_en'),
                    'isNew' => $request->input('isNew'),
                    'category' => $request->input('category'),
                ]);
                if ($img != null) {
                    if(!DB::table('products')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
                $mainProduct->update([
                    'main_catalog' => Catalog::find($request->input('category'))->parent
                ]);
            } else {
                $product->update([
                    'title_ru' =>$request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'reg_ru' => $request->input('reg_ru'),
                    'reg_en' => $request->input('reg_en'),
                    'name_ru' => $request->input('name_ru'),
                    'name_en' => $request->input('name_en'),
                    'inter_name' => $request->input('inter_name'),
                    'short_desc_ru' => $request->input('short_desc_ru'),
                    'short_desc_en' => $request->input('short_desc_en'),
                    'appointment_ru' => $request->input('appointment_ru'),
                    'appointment_en' => $request->input('appointment_en'),
                    'volume' => $request->input('volume'),
                    'recipe' => $request->input('recipe'),
                    'desc_ru' => $request->input('desc_ru'),
                    'desc_en' => $request->input('desc_en'),
                    'isNew' => $request->input('isNew'),
                    'category' => $request->input('category'),
                ]);
                $mainProduct->update([
                    'main_catalog' => Catalog::find($request->input('category'))->parent
                ]);
            }
            return redirect()->route('edit-product', ['id' => $request->id]);
        }
    }

    public function addSlider(Request $request)
    {
        if (!$request->all()) {
            return view('admin.slider.add-slider');
        } elseif ($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path().'/images/slider',$file->getClientOriginalName());
            $img = '/images/slider/'.$file->getClientOriginalName();
        } else {
            $img = '';
        }

        DB::table('sliders')->insert([
            'img' => $img,
            'title_ru' =>$request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'content_ru' => $request->input('content_ru'),
            'content_en' => $request->input('content_en'),
        ]);
        return redirect()->action('AdminController@readSlider');
    }
    public function editSlider(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.slider.edit-slider',['slide' => Slider::find($id)]);
        } else {
            $slider = Slider::find($request->id);
            if ($request->hasFile('img'))
            {
                $img = $slider->img;
                $file = $request->file('img');
                $file->move(public_path() . '/images/slider',$file->getClientOriginalName());
                $slider->update([
                    'img' => '/images/slider/'.$file->getClientOriginalName(),
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'content_ru' => $request->input('content_ru'),
                    'content_en' => $request->input('content_en'),
                ]);
                if ($img != null) {
                    if(!DB::table('sliders')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            } else {
                $slider->update([
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'content_ru' => $request->input('content_ru'),
                    'content_en' => $request->input('content_en'),
                ]);
            }
        }
        return redirect()->action('AdminController@readSlider');
    }

    public function addNews(Request $request)
    {
        if (!$request->all()) {
            return view ('admin.news.add-news');
        } elseif ($request->hasFile('default_img')) {
            $file = $request->file('default_img');
            $file->move(public_path().'/images/news',$file->getClientOriginalName());
            $default_img = '/images/news/'.$file->getClientOriginalName();
        } else {
            $default_img = '';
        }

        DB::table('news')->insert([
            'default_img' => $default_img,
            'title_ru' => $request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'prev_text_ru' => $request->input('prev_text_ru'),
            'prev_text_en' => $request->input('prev_text_en'),
            'text_ru' => $request->input('text_ru'),
            'text_en' => $request->input('text_en'),
            'date' => $request->input('date'),
            'share' => $request->input('share'),
        ]);
        return redirect()->action('AdminController@readNews');
    }
    public function editNews(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            $news = News::find($id);
            return view('admin.news.edit-news',['news' => $news]);
        } else {
            $news = News::find($request->id);
            if ($request->hasFile('default_img'))
            {
                $img = $news->default_img;
                $file = $request->file('default_img');
                $file->move(public_path() . '/images/news',$file->getClientOriginalName());
                $news->update([
                    'default_img' => '/images/news/'.$file->getClientOriginalName(),
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'prev_text_ru' => $request->input('prev_text_ru'),
                    'prev_text_en' => $request->input('prev_text_en'),
                    'text_ru' => $request->input('text_ru'),
                    'text_en' => $request->input('text_en'),
                    'date' => $request->input('date'),
                    'share' => $request->input('share'),
                ]);
                if ($img != null) {
                    if(!DB::table('news')->where('default_img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            } else {
                $news->update([
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'prev_text_ru' => $request->input('prev_text_ru'),
                    'prev_text_en' => $request->input('prev_text_en'),
                    'text_ru' => $request->input('text_ru'),
                    'text_en' => $request->input('text_en'),
                    'date' => $request->input('date'),
                    'share' => $request->input('share'),
                ]);
            }
            if ($request->hasFile('slider_img')) {
                $file = $request->file('slider_img');
                $file->move(public_path() . '/images/news_slider',$file->getClientOriginalName());

                DB::table('news_sliders')->insert([
                    'img' => '/images/news_slider/'.$file->getClientOriginalName(),
                    'parent' => $request->id,
                ]);
            }
        }
        return redirect()->route('edit-news',['id' => $request->id]);
    }

    public function addBrand(Request $request)
    {
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path() . '/images/brands',$file->getClientOriginalName());

            DB::table('brands')->insert([
                'img' => '/images/brands/'.$file->getClientOriginalName(),
            ]);
        }
        return redirect('read-brands');
    }
}
