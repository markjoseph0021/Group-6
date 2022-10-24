<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'pin_title',
        'pin_description',
        'pin_destination',
        'pin_image',
        'pin_link',
        'pin_size',
    ];
}
 