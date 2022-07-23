<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'site_favicon',
    //     'site_logo',
    //     'site_title',
    //     'meta_description',
    //     'meta_keywords',
    //     'about_us',
    //     'site_email',
    //     'site_address',
    //     'site_phone_number',
    //     'site_alternative_phone_number',
    //     'facebook_link',
    //     'instagram_link',
    //     'twitter_link',
    //     'youtube_link',
    // ];
}
