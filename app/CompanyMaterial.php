<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyMaterial extends Model
{
    protected $fillable = ['text_ru','text_en','img','second_text_ru','second_text_en'];
}
