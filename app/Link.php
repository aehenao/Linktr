<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'name', 'link', 'ico', 'preview', 'status', 'online'
    ];
}
