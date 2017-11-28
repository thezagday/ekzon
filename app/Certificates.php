<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $fillable = ['title_ru' , 'title_en' , 'img','img_en'];
}