<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Footer;

class UrlController extends Controller
{
    public function enlace($id)
    {
    	$link = Link::findOrFail($id);



        return redirect($link->link);
    }

    public function footer($id)
    {
    	$link = Footer::findOrFail($id);


        return redirect($link->link);
    }
}
