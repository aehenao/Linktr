<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
   public function index()
   {
   	  $links = Footer::all();
   	  //dd($links[0]->name);

   	  return view('admin.footerlinks.index', compact('links'));
   }

   public function edit($id)
   {
   	 $data = Footer::findOrFail($id);
   	 return view('admin.footerlinks.edit', compact('data'));
   }

   public function update(Request $request,$id)
   {
   	 $footer = Footer::findOrFail($id);

   	 $footer->fill($request->only(
   	 	'name', 'link', 'status'
   	 ));

   	 $footer->save();

   	 $notification = "Se ha actualizado el enlace satisfactoriamente"; 

   	return redirect('/footers')->with(compact('notification'));

   }
}
