<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends eloquent
{
    use HasFactory;

    protected $fillable = [
        'small',
        'medium',
        'large',
        'pintitle',
        'description',
        'link'
    ];
}
