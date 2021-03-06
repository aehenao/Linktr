<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clics;

class Footer extends Model
{
    protected $fillable = [
        'name', 'link', 'status'
    ];

    public function clics()
    {
    	return $this->hasMany(Clics::class);
    }
}
