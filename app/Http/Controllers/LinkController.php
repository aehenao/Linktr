<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Link;

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
   $links = Link::all();
   return view('admin.link.index', compact('links'));
}

public function create()
{

   return view('admin.link.create');
}

public function store(Request $request)
{
   $this->performValidation($request);

    	//Subo las imagenes a public/images
   $icoPath = Storage::disk('public')->put('images', $request->ico ); 
   $previewPath = Storage::disk('public')->put(
     'images', $request->preview );

   $data = array(
      'name' => $request->name,
      'link' => $request->link,
      'ico' => $icoPath,
      'preview' => $previewPath,
      'status' => $request->status
  );


   Link::create($data);

   $notification = "Se ha agregado el enlace satisfactoriamente"; 

   return redirect('/links')->with(compact('notification'));
}

public function edit($id)
{
    $data = Link::findOrFail($id);

    return view('admin.link.edit', compact('data'));
}

public function update(Request $request, $id)
{
    $this->performValidation($request);

    $links = Link::findOrFail($id);

    $data = array(
        'name' => $request->name,
        'link' => $request->link,
        'status' => $request->status
    );

    if($request->ico){

      $data['ico'] = Storage::disk('public')->put('images', $request->ico );
      //Elimino las imagenes asociadas al producto
      Storage::disk('public')->delete($links->ico);
  }

  if($request->preview){

     $data['preview'] = Storage::disk('public')->put('images', $request->preview );
      //Elimino las imagenes asociadas al producto
      Storage::disk('public')->delete($links->preview);
  }
   
    $links->fill($data);
    $links->save();

    $notification = "Se ha edito el enlace satisfactoriamente"; 

   return redirect('/links')->with(compact('notification'));

}

public function destroy(Link $link)
{
    Storage::disk('public')->delete($link->ico);
    Storage::disk('public')->delete($link->preview);

    $link->delete();

    $notification = "Se ha eliminado el enlace satisfactoriamente"; 

   return redirect('/links')->with(compact('notification'));
}

}
