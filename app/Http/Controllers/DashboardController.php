<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Visits;
use DB;
use App\Link;
use App\Footer;
use App\Clics;


class DashboardController extends Controller
{
	public function index()
	{
		$data = User::findOrFail(1);
		$visits = Visits::paginate(20);
		$clics = Clics::all();

		//Metricas
		$vSocial = $this->visitSocial();
		$vCountry = $this->visitCountry();
		
		
		return view('admin.index', compact('data', 'visits', 'vSocial', 'clics', 'vCountry'));
	}

	private function visitSocial(){

		$redSocial = Clics::select('name', DB::raw('count(*) as cant'))
		->groupBy('name')->orderBy('cant' , 'DESC')->take(10)->get();
		
		return $redSocial;
		
	}

	private function visitCountry(){

		$country = Visits::select('country', DB::raw('count(*) as cant'))
		->groupBy('country')->orderBy('cant' , 'DESC')->take(10)->get();
		
		return $country;
		
	}
}
