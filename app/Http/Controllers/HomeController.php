<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Footer;
use App\User;
use App\Clases\GetIP;
use App\Visits;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $links = Link::all();
        $footers = Footer::all();
        $user = User::findOrFail(1);
        $exists = $links->where('online', 'on') ;

        $this->registerRefer();
       
        if(count($exists) >= 1 ){
            $exists = true;
        }
        else{
            $exists = false;
        }

        //dd($exists);

        return view('welcome', compact('links', 'footers', 'exists', 'user'));
    }


    public function registerRefer()
    {
        $getIP = new GetIP();
        $modelVisits = Visits::all();
        $arr_ip = geoip()->getLocation($getIP->getRealIP());
        
        $fecha_actual = date("d-m-Y");
        $ip =  $arr_ip->ip;
        $dateVisits = count($getIP->getDateVisits($fecha_actual, $ip));

        
       
        //$existsIP =  $modelVisits->contains('ip', $ip);  //valido si existe la IP
        //$existsRefer =  $modelVisits->contains('refer', $referrer);


        if($dateVisits == 0)
            $getIP->registerVisits($data);
            
    }

    
   
}
