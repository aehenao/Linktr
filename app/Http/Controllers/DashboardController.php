<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
	public function index()
	{
		$data = User::findOrFail(1);

		return view('admin.index', compact('data'));
	}
}
