<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visits;


class Clics extends Model
{

    public function visit()
    {
    	return $this->belongsTo(Visits::class);
    }

}
