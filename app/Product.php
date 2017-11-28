<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title_ru','title_en','reg_ru','reg_en','name_ru','name_en','inter_name','short_desc_ru','short_desc_en','appointment_ru','appointment_en','volume','recipe','desc_ru','desc_en','img','isNew','category','file','atx','packing_en','price','franko'];
    public function parentCategory()
    {
        return $this->belongsTo('App\Catalog','category');
    }
}
