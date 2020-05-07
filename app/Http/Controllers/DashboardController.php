<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tracker;

class DashboardController extends Controller
{
	public function index()
	{
		$users = Tracker::onlineUsers();
		$sessions = Tracker::sessions(60*24);

		foreach ($sessions as $session)
		{
			//var_dump( $session->user->email );

			//var_dump( $session->device->kind . ' - ' . $session->device->platform );

			//var_dump( $session->agent->browser . ' - ' . $session->agent->browser_version );

			//var_dump( $session->geoIp->country_name );
			dd($session->agent->browser);
			
		}

		return view('admin.index');
	}
}
