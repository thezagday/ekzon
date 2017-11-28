<?php

namespace App\Http\Controllers;

use App\Produced;
use App\SocialYearBanner;
use Illuminate\Http\Request;
use App\CompanyMaterial;
use App\PageMaterial;
use App\Brands;

class CompanyController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }

    public function company()
    {
        $material = CompanyMaterial::first();
        $pageMaterial = PageMaterial::where('link',$_SERVER['REQUEST_URI'])->first();
        $brands = Brands::all();
        $produced = Produced::all();
        $year = SocialYearBanner::find(1)->year;

        return view('company',['material' => $material,'pageMaterial' => $pageMaterial,'brands' => $brands,'produced' => $produced,'year' => $year]);
    }
}
