<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;


class ProfileController extends Controller
{
	public function index()
	{
		$data = User::findOrFail(1);
		return view('admin.profile.index', compact('data'));
	}

	public function update(Request $request ,$id)
	{
		$profile = User::findOrFail($id);


		$data = array(
			'name' => $request->name,
			// 'user' => $request->user,
			'email' => $request->email,

		);

		if(isset($request->password))
			$data['password'] = bcrypt($request->password);


		if($request->img){

			$data['img'] = Storage::disk('public')->put('assets\images\users', $request->img );

			if($profile->img)
				Storage::disk('public')->delete($profile->img);
		}

		$profile->fill($data);
		$profile->save();

		$notification = "Se ha actualizado su informacion personal."; 

		return redirect('/profile')->with(compact('notification'));
		
	}
}
