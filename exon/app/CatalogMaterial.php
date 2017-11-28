<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogMaterial extends Model
{
    public function parent()
    {
        return $this->belongsTo('App\Catalog','parent');
    }
}
