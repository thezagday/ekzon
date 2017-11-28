<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'address_ru','address_ru','phone1','phone2','mail','copyright_ru','copyright_en'
    ];
}
