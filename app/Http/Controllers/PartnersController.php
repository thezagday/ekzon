<?php

namespace App\Http\Controllers;


use App\Partner;

class PartnersController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function partners()
    {
        $partner = Partner::find(1);
        return view('partners',['partner' => $partner]);
    }
}