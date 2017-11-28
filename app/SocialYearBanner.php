<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialYearBanner extends Model
{
    protected $table = 'social_year_banner';
    protected $fillable = [
        'vk', 'inst', 'fb','ok','year','banner',
    ];
}
