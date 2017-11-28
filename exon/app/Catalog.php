<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Catalog extends Model
{
    protected $fillable = [
        'title_ru','title_en','parent'
    ];
    public function subCatalogs()
    {
        return $this->hasMany('App\Catalog','parent');
    }
    public function parentCatalog()
    {
        return $this->belongsTo('App\Catalog','parent');
    }
    public function products()
    {
        return $this->hasMany('App\Product','category');
    }

    public function material()
    {
        return $this->hasOne('App\CatalogMaterial','parent');
    }

    public function mainProducts()
    {
        return $this->hasMany('App\MainProduct','main_catalog');
    }
}
