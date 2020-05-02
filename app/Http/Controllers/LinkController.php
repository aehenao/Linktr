<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
	private function performValidation($request){
		$rules = [

			'name' => 'required|min:3',
			'link' => 'nullable|min:3',
			'status' => 'required'

		];

		$this->validate($request, $rules);
	}

   public function index()
    {
    	return view('admin.link.index');
    }

    public function create()
    {
    	return view('admin.link.create');
    }

    public function store(Request $request)
    {
    	# code...
    }
}
