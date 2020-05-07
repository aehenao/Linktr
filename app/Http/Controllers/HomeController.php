<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Footer;
use App\User;
use Tracker;

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

        $visitor = Tracker::currentSession();
        $users = Tracker::users(60 * 24);

        $users = Tracker::userDevices(60 * 24, $user->id);
       
        if(count($exists) >= 1 ){
            $exists = true;
        }
        else{
            $exists = false;
        }

        //dd($exists);

        return view('welcome', compact('links', 'footers', 'exists', 'user', 'visitor'));
    }
}
