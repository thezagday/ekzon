<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dispatch;
use App\Document;
use App\Partner;
use App\SocialYearBanner;
use App\User;
use App\Produced;
use App\Brands;
use App\Catalog;
use App\CatalogMaterial;
use App\CompanyMaterial;
use App\MainProduct;
use App\News;
use App\NewsSlider;
use App\Product;
use App\Slider;
use App\SecondSlider;
use App\Contacts;
use App\MainMaterial;
use App\Certificates;
use App\Video;
use App\Form;


class AdminController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
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
        $file = $product->file;
        $category = $product->category;
        $product->delete();
        if (MainProduct::where('product_id',$id)->first()) {
            MainProduct::where('product_id',$id)->first()->delete();
        }

        if ($img != null) {
            if (! DB::table('products')->where('img','like',$img)->first()) {
                if (file_exists(public_path().$img)) {
                    unlink(public_path().$img);
                }
            }
        }

        if ($file != null) {
            if (! DB::table('products')->where('file','like',$file)->first()) {
                if (file_exists(public_path().$file)) {
                    unlink(public_path().$file);
                }
            }
        }
        return redirect()->route('read-products', ['id' => $category]);
    }

    public function banner()
    {
        $banner = SocialYearBanner::find(1)->banner;
        return view ('admin.banner.banner',['banner' => $banner]);
    }
    public function deleteBanner()
    {
        $obj = SocialYearBanner::find(1);
        if ($obj->banner != null) {
            if (file_exists(public_path().$obj->banner)) {
                unlink(public_path().$obj->banner);
            }
        }
        $obj->banner = null;
        $obj->save();
        
        return redirect()->action('AdminController@banner');
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

    public function readSecondSlider()
    {
        $sliders = SecondSlider::all();
        return view('admin.second_slider.read-slider',['sliders' => $sliders]);
    }
    public function deleteSecondSlider($id)
    {
        $slider = SecondSlider::find($id);
        $img = $slider->img;
        $slider->delete();
        if ($img != null)
        {
            if (! DB::table('second_sliders')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@readSecondSlider');
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

    public function readContacts()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.read-contacts',['contacts' => $contacts]);
    }
    public function updateContacts(Request $request)
    {
        DB::table('contacts')->where('id',1)->update([
            'firm_ru' => htmlspecialchars($request->input('firm_ru')),
            'firm_en' => htmlspecialchars($request->input('firm_en')),
            'field_address_ru' => $request->input('field_address_ru'),
            'field_address_en' => $request->input('field_address_en'),
            'address_ru' => $request->input('address_ru'),
            'address_en' => $request->input('address_en'),
            'field_reception_ru' => $request->input('field_reception_ru'),
            'field_reception_en' => $request->input('field_reception_en'),
            'reception_ru' => $request->input('reception_ru'),
            'reception_en' => $request->input('reception_en'),
            'field_email' => $request->input('field_email'),
            'email_ru' => $request->input('email_ru'),
            'email_en' => $request->input('email_en'),
            'field_requisites_ru' => $request->input('field_requisites_ru'),
            'field_requisites_en' => $request->input('field_requisites_en'),
            'requisites_ru' => $request->input('requisites_ru'),
            'requisites_en' => $request->input('requisites_en'),
            'field_work_ru' => $request->input('field_work_ru'),
            'field_work_en' => $request->input('field_work_en'),
            'work_ru' => $request->input('work_ru'),
            'work_en' => $request->input('work_en'),
            'field_leadership_ru' => $request->input('field_leadership_ru'),
            'field_leadership_en' => $request->input('field_leadership_en'),
            'leadership_ru' => $request->input('leadership_ru'),
            'leadership_en' => $request->input('leadership_en'),
            'name_lead_ru' => $request->input('name_lead_ru'),
            'name_lead_en' => $request->input('name_lead_en'),
            'phone_lead_ru' => $request->input('phone_lead_ru'),
            'phone_lead_en' => $request->input('phone_lead_en'),
            'mail_lead' => $request->input('mail_lead'),
            'vice_leadership_ru' => $request->input('vice_leadership_ru'),
            'vice_leadership_en' => $request->input('vice_leadership_en'),
            'name_vice_lead_ru' => $request->input('name_vice_lead_ru'),
            'name_vice_lead_en' => $request->input('name_vice_lead_en'),
            'vice_phone' => $request->input('vice_phone'),
            'vice_mail' => $request->input('vice_mail'),
            'field_marketing_ru' => $request->input('field_marketing_ru'),
            'field_marketing_en' => $request->input('field_marketing_en'),
            'marketing_ru' => $request->input('marketing_ru'),
            'marketing_en' => $request->input('marketing_en'),
            'name_marketing_ru' => $request->input('name_marketing_ru'),
            'name_marketing_en' => $request->input('name_marketing_en'),
            'phone_marketing' => $request->input('phone_marketing'),
            'mail_marketing' => $request->input('mail_marketing'),
            'field_tech_dep_ru' => $request->input('field_tech_dep_ru'),
            'field_tech_dep_en' => $request->input('field_tech_dep_en'),
            'head_dep_ru' => $request->input('head_dep_ru'),
            'head_dep_en' => $request->input('head_dep_en'),
            'name_head_dep_ru' => $request->input('name_head_dep_ru'),
            'name_head_dep_en' => $request->input('name_head_dep_en'),
            'phone_head_dep' => $request->input('phone_head_dep'),
            'mail_head_dep' => $request->input('mail_head_dep'),
            'field_control_ru' => $request->input('field_control_ru'),
            'field_control_en' => $request->input('field_control_en'),
            'head_con_ru' => $request->input('head_con_ru'),
            'head_con_en' => $request->input('head_con_en'),
            'name_head_con_ru' => $request->input('name_head_con_ru'),
            'name_head_con_en' => $request->input('name_head_con_en'),
            'phone_con' => $request->input('phone_con'),
            'field_bookkeeping_ru' => $request->input('field_bookkeeping_ru'),
            'field_bookkeeping_en' => $request->input('field_bookkeeping_en'),
            'head_bk_ru' => $request->input('head_bk_ru'),
            'head_bk_en' => $request->input('head_bk_en'),
            'name_head_bk_ru' => $request->input('name_head_bk_ru'),
            'name_head_bk_en' => $request->input('name_head_bk_en'),
            'phone_bk' => $request->input('phone_bk'),
            'field_sales_ru' => $request->input('field_sales_ru'),
            'field_sales_en' => $request->input('field_sales_en'),
            'head_sales_ru' => $request->input('head_sales_ru'),
            'head_sales_en' => $request->input('head_sales_en'),
            'name_head_sales_ru' => $request->input('name_head_sales_ru'),
            'name_head_sales_en' => $request->input('name_head_sales_en'),
            'phone_sales' => $request->input('phone_sales'),
            'lead_spec_ru' => $request->input('lead_spec_ru'),
            'lead_spec_en' => $request->input('lead_spec_en'),
            'name_lead_spec_ru' => $request->input('name_lead_spec_ru'),
            'name_lead_spec_en' => $request->input('name_lead_spec_en'),
            'phone_lead_spec' => $request->input('phone_lead_spec'),
            'spec_bad_ru' => $request->input('spec_bad_ru'),
            'spec_bad_en' => $request->input('spec_bad_en'),
            'fax_bad_ru' => $request->input('fax_bad_ru'),
            'fax_bad_en' => $request->input('fax_bad_en'),
            'phone_bad' => $request->input('phone_bad'),
            'mail_bad' => $request->input('mail_bad'),
            'field_sup_ru' => $request->input('field_sup_ru'),
            'field_sup_en' => $request->input('field_sup_en'),
            'head_sup_ru' => $request->input('head_sup_ru'),
            'head_sup_en' => $request->input('head_sup_en'),
            'name_sup_ru' => $request->input('name_sup_ru'),
            'name_sup_en' => $request->input('name_sup_en'),
            'phone_sup_ru' => $request->input('phone_sup_ru'),
            'phone_sup_en' => $request->input('phone_sup_en'),
            'mail_sup' => $request->input('mail_sup'),
        ]);
        return redirect()->action('AdminController@readContacts');
    }

    public function readMaterial()
    {
        $material = MainMaterial::find(1);
        return view('admin.material.read-material',['material' => $material]);
    }
    public function updateMaterial(Request $request)
    {
        DB::table('main_materials')->where('id',1)->update([
            'title_ru' => $request->input('title_ru'),
            'title_en' => $request->input('title_en'),
            'text_first_ru' => $request->input('text_first_ru'),
            'text_first_en' => $request->input('text_first_en'),
            'text_second_ru' => $request->input('text_second_ru'),
            'text_second_en' => $request->input('text_second_en'),
        ]);
        return redirect()->action('AdminController@readMaterial');
    }

    public function readCompany()
    {
        $material = CompanyMaterial::find(1);
        $year = SocialYearBanner::find(1)->year;
        return view('admin.company.read-company',['material' => $material,'year' => $year]);
    }

    public function readProduceds()
    {
        $produceds = Produced::all();
        return view('admin.produceds.read-produceds',['produceds' => $produceds]);
    }
    public function deleteProduced($id)
    {
        $prod = Produced::find($id);
        $img = $prod->img;
        $prod->delete();
        if ($img != null)
        {
            if (! DB::table('produceds')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@readProduceds');
    }

    public function readPartners()
    {
        return view ('admin.partner.read-partners',['partner' => Partner::find(1)]);
    }
    public function updatePartner(Request $request)
    {
        DB::table('partners')->where('id',1)->update([
            'text_ru' => $request->input('text_ru'),
            'text_en' => $request->input('text_en'),
        ]);
        return redirect()->action('AdminController@readPartners');
    }

    public function readVideo()
    {
        $video = Video::all();
        return view('admin.video.read-video',['video' => $video]);
    }
    public function deleteVideo($id)
    {
        $video = Video::find($id);
        $img = $video->img;
        $video->delete();
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
        return redirect()->action('AdminController@readVideo');
    }

    public function readCert()
    {
        $cert = Certificates::all();
        return view('admin.cert.read-cert',['cert' => $cert]);
    }
    public function deleteCert($id)
    {
        $cert = Certificates::find($id);
        $img = $cert->img;
        $img_en = $cert->img_en;
        $cert->delete();
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
        if ($img_en != null)
        {
            if (! DB::table('sliders')->where('img_en','like',$img_en)->first())
            {
                if (file_exists(public_path().$img_en))
                {
                    unlink(public_path().$img_en);
                }
            }
        }
        return redirect()->action('AdminController@readCert');
    }

    public function social()
    {
        $social = DB::table('social_year_banner')->select('vk','inst','fb','ok')->get();
        return view('admin.social.social',['social' => $social]);
    }
    public function updateSocial(Request $request)
    {
        DB::table('social_year_banner')->where('id',1)->update([
            'vk' => $request->input('vk'),
            'inst' => $request->input('inst'),
            'fb' => $request->input('fb'),
            'ok' => $request->input('ok'),
        ]);
        return redirect()->action('AdminController@social');
    }

    public function docs()
    {
        $docs = Document::all();
        return view('admin.docs.docs',['docs' => $docs]);
    }
    public function deleteDoc($id)
    {
        $doc = Document::find($id);
        $path = $doc->path;
        $doc->delete();
        if ($path != null)
        {
            if (! DB::table('documents')->where('path','like',$path)->first())
            {
                if (file_exists(public_path().$path))
                {
                    unlink(public_path().$path);
                }
            }
        }
        return redirect()->action('AdminController@docs');
    }

    public function form()
    {
        $products_id = Form::all()->pluck('product');

        $products = DB::table('products')->whereIn('id',$products_id)->get();
        return view ('admin.form.form',['products' => $products]);
    }
    public function formAdd(Request $request)
    {
        if (!$request->all()) {
            $existsProducts = Form::all()->pluck('product')->toArray();
            $allProducts = Product::all();
            return view ('admin.form.add-form',['allProducts' => $allProducts,'existsProducts' => $existsProducts]);
        } else {
            foreach ($request->input('products') as $id) {
                DB::table('forms')->insert([
                    'product' => $id
                ]);
            }
        }
        return redirect()->action('AdminController@form');
    }
    public function formDelete($id)
    {
        DB::table('forms')->where('product',$id)->delete();

        return redirect()->action('AdminController@form');
    }

    public function dispatchEdit()
    {
        $dispatch = Dispatch::all();
        return view ('admin.dispatch.dispatch',['dispatch' => $dispatch]);
    }
    public function dispatchDelete($id)
    {
        DB::table('dispatch')->where('id',$id)->delete();
        return redirect()->action('AdminController@dispatchEdit');
    }

    public function users()
    {
        $users = User::all()->where('admin','<>',1);
        return view('admin.users.read-users',['users' => $users]);
    }
    public function editUser(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            $user = User::find($id);
            return view('admin.users.edit-user',['user' => $user]);
        } else {
            DB::table('users')->where('id',$request->input('id'))->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'organization' => $request->input('organization'),
                'UNP' => $request->input('UNP'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'office' => $request->input('office'),
                'desc' => $request->input('desc'),
            ]);
            return redirect()->route('edit-user',['id' => $request->input('id')]);
        }
    }
    public function addUser(Request $request)
    {
        if (!$request->all()) {
            return view('admin.users.add-user');
        } else {
            DB::table('users')->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'admin' => 0,
                'phone' => $request->input('phone'),
                'organization' => $request->input('organization'),
                'UNP' => $request->input('UNP'),
                'country' => $request->input('country'),
                'address' => $request->input('address'),
                'office' => $request->input('office'),
                'desc' => $request->input('desc'),
            ]);
            return redirect('/users');
        }
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->action('AdminController@users');
    }

    public function passReset(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            return view ('admin.users.new-pass',['id' => $id,'user' => User::find($id)]);
        } else {
            $user = User::find($request->input('id'));
            $user->password = bcrypt($request->input('new_password'));
            $user->save();
            return redirect()->route('edit-user',['id' => $request->input('id')]);
        }

    }

    public function change(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.password.change');
        }
        else
        {
            $user = User::where('admin',1)->first();
            if (Hash::check(($request->get('old')), $user->password))
            {
                if ( $request->get('new') == $request->get('confirm') )
                {
                    $user->password = Hash::make($request->get('new'));
                    $user->save();
                    return view('admin.password.change',['message'=>'Пароль успешно изменен!']);
                }
                else
                {
                    return view('admin.password.change',['message'=>'Новые пароли не совпадают!']);
                }
            }
            else
            {
                return view('admin.password.change',['message'=>'Старый пароль был не такой!']);
            }
        }
    }
}
