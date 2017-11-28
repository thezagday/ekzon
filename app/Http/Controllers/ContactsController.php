<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageMaterial;
use App\Contacts;

class ContactsController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }

    public function contacts()
    {
        $pageMaterial = PageMaterial::where('link',$_SERVER['REQUEST_URI'])->first();
        $contact = Contacts::first();
        return view('contacts',['pageMaterial' => $pageMaterial,'contact' => $contact]);
    }
}
