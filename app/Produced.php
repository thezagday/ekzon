<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produced extends Model
{
    protected $fillable = ['title_ru','title_en','number','img'];
}
