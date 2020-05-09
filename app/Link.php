<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clics;

class Link extends Model
{

    protected $fillable = [
        'name', 'link', 'ico', 'preview', 'status', 'online'
    ];

}
