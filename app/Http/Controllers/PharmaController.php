<?php

namespace App\Http\Controllers;


use App\Contacts;

class PharmaController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function pharma()
    {
        $contacts = Contacts::all();
        return view('pharma',['contacts' => $contacts]);
    }
}