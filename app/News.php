<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title_ru','title_en','prev_text_ru','prev_text_en','text_ru','text_en','date','default_img','share','sharer'];

    public function images()
    {
        return $this->hasMany('App\NewsSlider','parent');
    }
}
