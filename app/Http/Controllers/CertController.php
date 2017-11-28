<?php

namespace App\Http\Controllers;


use App\Certificates;

class CertController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function cert()
    {
        return view ('cert',['certificates' => Certificates::all()]);
    }
}
