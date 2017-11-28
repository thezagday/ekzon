<?php

namespace App\Http\Controllers;


use App\Video;

class VideoController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['lang']))
        {
            $_SESSION['lang'] = 'RU';
        }
    }
    public function video()
    {
        return view ('video',['video' => Video::all()]);
    }
}
