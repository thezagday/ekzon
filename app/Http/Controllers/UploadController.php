<?php

namespace App\Http\Controllers;

use App\Certificates;
use App\Dispatch;
use App\Document;
use App\Produced;
use App\CompanyMaterial;
use App\MainProduct;
use App\News;
use App\SocialYearBanner;
use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\Video;
use App\SecondSlider;

class UploadController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
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

        $id = DB::table('products')->insertGetId([
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
            'atx' => $request->input('atx'),
            'packing_en' => $request->input('packing_en'),
            'price' => $request->input('price'),
            'franko' => $request->input('franko'),
        ]);
        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $file->move(public_path() . '/docs/products',$file->getClientOriginalName());
            Product::find($id)->update([
                'file' => '/docs/products/'.$file->getClientOriginalName(),
            ]);
        }

        return redirect()->route('read-products', ['id' => $request->input('category')]);
    }
    public function editProduct(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.products.edit-product',['product' => Product::find($id), 'parents' => Catalog::where('parent','<>',0)->get()]);
        } else {
            $product = Product::find($request->id);
            $mainProduct = MainProduct::where('product_id',$request->id)->first();
         
            if ($request->hasFile('img')) {
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
                    'atx' => $request->input('atx'),
                    'packing_en' => $request->input('packing_en'),
                    'price' => $request->input('price'),
                    'franko' => $request->input('franko'),
                ]);
                if ($img != null) {
                    if(!DB::table('products')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
                if ($mainProduct) {
                    $mainProduct->update([
                        'main_catalog' => Catalog::find($request->input('category'))->parent
                    ]);
                }
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
                    'atx' => $request->input('atx'),
                    'packing_en' => $request->input('packing_en'),
                    'price' => $request->input('price'),
                    'franko' => $request->input('franko'),
                ]);
                if ($mainProduct) {
                    $mainProduct->update([
                        'main_catalog' => Catalog::find($request->input('category'))->parent
                    ]);
                }
            }
            if ($request->hasFile('file')) {
                $old = $product->file;

                $file = $request->file('file');
                $file->move(public_path() . '/docs/products',$file->getClientOriginalName());
                $product->update([
                    'file' => '/docs/products/'.$file->getClientOriginalName(),
                ]);

                if ($old != null) {
                    if(!DB::table('products')->where('file','like',$old)->first()) {
                        if (file_exists(public_path() .$old)) {
                            unlink(public_path() .$old);
                        }
                    }
                }
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

        $id = DB::table('news')->insertGetId([
            'default_img' => $default_img,
            'title_ru' => $request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'prev_text_ru' => $request->input('prev_text_ru'),
            'prev_text_en' => $request->input('prev_text_en'),
            'text_ru' => $request->input('text_ru'),
            'text_en' => $request->input('text_en'),
            'date' => $request->input('date'),
            'share' => $request->input('share'),
            'sharer' => $request->input('sharer'),
        ]);

        foreach (Dispatch::all() as $item) {
            mail($item->email, "На сайте 'Экзон' новая новость!", "Ссылка:{$_SERVER['SERVER_NAME']}/news-page/$id");
        }

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
                    'sharer' => $request->input('sharer'),
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
                    'sharer' => $request->input('sharer'),
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

    public function addSecondSlider(Request $request)
    {
        if (!$request->all()) {
            return view('admin.second_slider.add-slider');
        } elseif ($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path().'/images/slider',$file->getClientOriginalName());
            $img = '/images/slider/'.$file->getClientOriginalName();
        } else {
            $img = '';
        }

        DB::table('second_sliders')->insert([
            'img' => $img,
        ]);
        return redirect()->action('AdminController@readSecondSlider');
    }
    public function editSecondSlider(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.second_slider.edit-slider',['slide' => SecondSlider::find($id)]);
        } else {
            $slider = SecondSlider::find($request->id);
            if ($request->hasFile('img'))
            {
                $img = $slider->img;
                $file = $request->file('img');
                $file->move(public_path() . '/images/slider',$file->getClientOriginalName());
                $slider->update([
                    'img' => '/images/slider/'.$file->getClientOriginalName(),
                ]);
                if ($img != null) {
                    if(!DB::table('sliders')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            }
        }
        return redirect()->action('AdminController@readSecondSlider');
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

    public function updateBanner(Request $request)
    {
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path() . '/images/banner',$file->getClientOriginalName());

            $img = SocialYearBanner::find(1)->banner;

            DB::table('social_year_banner')->update([
                'banner' => '/images/banner/'.$file->getClientOriginalName(),
            ]);
        }
        if ($img != null) {
            if (file_exists(public_path() .$img)) {
                unlink(public_path() .$img);
            }
        }
        return redirect('banner');
    }

    public function updateCompany(Request $request)
    {
        $material = CompanyMaterial::find(1);
        $year = SocialYearBanner::find(1);

        if ($request->hasFile('img'))
        {
            $img = $material->img;

            $file = $request->file('img');
            $file->move(public_path() . '/images/company',$file->getClientOriginalName());
            $material->update([
                'img' => '/images/company/'.$file->getClientOriginalName(),
                'text_ru' =>$request->input('text_ru'),
                'text_en' => $request->input('text_en'),
'second_text_ru' =>$request->input('second_text_ru'),
                'second_text_en' => $request->input('second_text_en'),

            ]);
            if ($img != null) {
                if (file_exists(public_path() .$img)) {
                    unlink(public_path() .$img);
                }
            }

        } else {
            $material->update([
                'text_ru' =>$request->input('text_ru'),
                'text_en' => $request->input('text_en'),
'second_text_ru' =>$request->input('second_text_ru'),
                'second_text_en' => $request->input('second_text_en'),
            ]);
        }
        if ($request->input('year')) {
            $year->update([
                'year' => $request->input('year'),
            ]);
        }
        return redirect()->action('AdminController@readCompany');
    }

    public function addProduced(Request $request)
    {
        if (!$request->all()) {
            return view('admin.produceds.add-produced');
        } elseif ($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path().'/images/company',$file->getClientOriginalName());
            $img = '/images/company/'.$file->getClientOriginalName();
        } else {
            $img = '';
        }

        DB::table('produceds')->insert([
            'img' => $img,
            'title_ru' =>$request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'number' => $request->input('number'),
        ]);
        return redirect()->action('AdminController@readProduceds');
    }
    public function editProduced(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.produceds.edit-produced',['prod' => Produced::find($id)]);
        } else {
            $prod = Produced::find($request->id);

            if ($request->hasFile('img'))
            {
                $img = $prod->img;

                $file = $request->file('img');
                $file->move(public_path() . '/images/company',$file->getClientOriginalName());
                $prod->update([
                    'img' => '/images/company/'.$file->getClientOriginalName(),
                    'title_ru' =>$request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'number' => $request->input('number'),
                ]);
                if ($img != null) {
                    if(!DB::table('produceds')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            } else {
                $prod->update([
                    'title_ru' =>$request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                    'number' => $request->input('number'),
                ]);
            }
            return redirect()->route('edit-produced', ['id' => $request->id]);
        }
    }

    public function addVideo(Request $request)
    {
        if (!$request->all()) {
            return view('admin.video.add-video');
        } elseif ($request->hasFile('img')) {
            $file = $request->file('img');
            $file->move(public_path().'/images/video',$file->getClientOriginalName());
            $img = '/images/video/'.$file->getClientOriginalName();
        } else {
            $img = '';
        }

        DB::table('videos')->insert([
            'img' => $img,
            'video' =>$request->input('video'),
        ]);
        return redirect()->action('AdminController@readVideo');
    }
    public function editVideo(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.video.edit-video',['video' => Video::find($id)]);
        } else {
            $video= Video::find($request->id);
            if ($request->hasFile('img'))
            {
                $img = $video->img;
                $file = $request->file('img');
                $file->move(public_path() . '/images/video',$file->getClientOriginalName());
                $video->update([
                    'img' => '/images/video/'.$file->getClientOriginalName(),
                    'video' => $request->input('video'),
                ]);
                if ($img != null) {
                    if(!DB::table('videos')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            } else {
                $video->update([
                    'video' => $request->input('video'),
                ]);
            }
        }
        return redirect()->action('AdminController@readVideo');
    }

    public function addCert(Request $request)
    {
        if (!$request->all()) {
            return view('admin.cert.add-cert');
        } else {
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $file->move(public_path() . '/images/cert', $file->getClientOriginalName());
                $img = '/images/cert/' . $file->getClientOriginalName();
            } else {
                $img = '';
            }
            if ($request->hasFile('img_en')) {
                $file = $request->file('img_en');
                $file->move(public_path() . '/images/cert', $file->getClientOriginalName());
                $img_en = '/images/cert/' . $file->getClientOriginalName();
            } else {
                $img_en = '';
            }
        }

        DB::table('certificates')->insert([
            'img' => $img,
            'img_en' => $img_en,
            'title_ru' =>$request->input('title_ru'),
            'title_en' => $request->input('title_en'),
        ]);
        return redirect()->action('AdminController@readCert');
    }
    public function editCert(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.cert.edit-cert',['cert' => Certificates::find($id)]);
        } else {
            $cert = Certificates::find($request->id);
            /*ru*/
            if ($request->hasFile('img'))
            {
                $img = $cert->img;
                $file = $request->file('img');
                $file->move(public_path() . '/images/cert',$file->getClientOriginalName());
                $cert->update([
                    'img' => '/images/cert/'.$file->getClientOriginalName(),
                ]);
                if ($img != null) {
                    if(!DB::table('certificates')->where('img','like',$img)->first()) {
                        if (file_exists(public_path() .$img)) {
                            unlink(public_path() .$img);
                        }
                    }
                }
            }
            /*en*/
            if ($request->hasFile('img_en'))
            {
                $img_en = $cert->img_en;
                $file = $request->file('img_en');
                $file->move(public_path() . '/images/cert',$file->getClientOriginalName());
                $cert->update([
                    'img_en' => '/images/cert/'.$file->getClientOriginalName(),
                ]);
                if ($img_en != null) {
                    if(!DB::table('certificates')->where('img_en','like',$img_en)->first()) {
                        if (file_exists(public_path() .$img_en)) {
                            unlink(public_path() .$img_en);
                        }
                    }
                }
            }
            $cert->update([
                'title_ru' => $request->input('title_ru'),
                'title_en' => $request->input('title_en'),
            ]);
        }
        return redirect()->action('AdminController@readCert');
    }

    public function addDoc(Request $request)
    {
        if (!$request->all()) {
            return view('admin.docs.add-doc');
        } elseif ($request->hasFile('path')) {
            $file = $request->file('path');
            $file->move(public_path().'/docs',$file->getClientOriginalName());
            $path = '/docs/'.$file->getClientOriginalName();
        } else {
            $path = '';
        }

        DB::table('documents')->insert([
            'path' => $path,
            'title_ru' =>$request->input('title_ru'),
            'title_en' => $request->input('title_en'),
        ]);
        return redirect()->action('AdminController@docs');
    }
    public function editDoc(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view('admin.docs.edit-doc',['doc' => Document::find($id)]);
        } else {
            $doc = Document::find($request->input('id'));
            if ($request->hasFile('path'))
            {
                $path = $doc->path;
                $file = $request->file('path');
                $file->move(public_path() . '/docs',$file->getClientOriginalName());
                $doc->update([
                    'path' => '/docs/'.$file->getClientOriginalName(),
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                ]);
                if ($path != null) {
                    if(!DB::table('documents')->where('path','like',$path)->first()) {
                        if (file_exists(public_path() .$path)) {
                            unlink(public_path() .$path);
                        }
                    }
                }
            } else {
                $doc->update([
                    'title_ru' => $request->input('title_ru'),
                    'title_en' => $request->input('title_en'),
                ]);
            }
        }
        return redirect()->action('AdminController@docs');
    }
}
