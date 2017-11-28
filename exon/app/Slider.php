<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'img', 'title_ru', 'title_en','content_ru','content_en'
    ];
}
