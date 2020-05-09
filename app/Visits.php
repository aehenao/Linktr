<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clics;

class Visits extends Model
{
	protected $fillable = [
        'ip', 'refer', 'link_name', 'country', 'city',
    ];

    public function clics()
    {
    	return $this->hasMany(Clics::class);
    }
}
