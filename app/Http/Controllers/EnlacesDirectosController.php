<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\EnlacesDirectos;

class EnlacesDirectosController extends Controller
{
    protected $enlaceDirecto;
    public function __construct(EnlacesDirectos $enlaceDirecto){
        $this->enlaceDirecto = $enlaceDirecto;
    }

    private function performValidation($request){
		$rules = [

			'alias' => 'required|min:3',
			'destino' => 'nullable|min:3',
			'imagen' => 'required'

		];

		$this->validate($request, $rules);
	}

    public function index(){
        $datos = $this->enlaceDirecto->all();
        return view('admin.linkdirecto.index', compact('datos'));
    }

    public function vistaCrear(){
        return view('admin.linkdirecto.create');
    }

    public function store(Request $request){
        $this->performValidation($request);
        $imagen = $request->file('imagen');
        $imagenName = $imagen->getClientOriginalName();

        //Valido que no se repita el alias debido a que el ID de la URL
        $exist = $this->enlaceDirecto->where('enlace', '=', $request->alias)->exists();
        if($exist){
            $alerta = "Ya existe una URL con el alias " . $request->alias;
            return back()->withInput()->with(compact('alerta'));
        }
        //dd(Storage::disk('public')->exists($imagenName));
        //Valido si existe el archivo
        if (Storage::disk('public')->exists($imagenName)) {
            $alerta = "Ya existe un archivo con el mismo nombre en el servidor.";
            return back()->withInput()->with(compact('alerta'));
        }

        $upload = Storage::putFileAs('public', $imagen, $imagenName);
        $url = Storage::url($imagenName);
        $data = array(
            'enlace'        => $request->alias,
            'destino'       => $request->destino,
            'tiempo_espera' => $request->tiempo_espera,
            'estado'        => $request->estado,
            'imagen'        => $url,
            'nombre_imagen' => $imagenName,
            'titulo'        => $request->titulo,
            'subtitulo'     => $request->subtitulo
        );

        $guardo = $this->enlaceDirecto->create($data);

        if($guardo){
            $notification = "Se ha creado el enlace directo."; 
            return redirect('/link-directo')->with(compact('notification'));
        }else{
            $error = "No se pudo crear el enlace directo";
            return redirect('/link-directo')->with(compact('error'));
        }
        
    }

    public function vistaEditar($id){
        $link = $this->enlaceDirecto->find($id);
        return view('admin.linkdirecto.edit', compact('link'));
    }

    public function update(Request $request, $id){
        $link = $this->enlaceDirecto->find($id);
        $alias = $request->alias;
        $destino = $request->destino;
        $tiempoEspera = $request->tiempo_espera;
        $estado = $request->estado;
        $imagen = $request->file('imagen');
        $url = NULL;

        $data = array(
            'enlace'        => $request->alias,
            'destino'       => $request->destino,
            'tiempo_espera' => $request->tiempo_espera,
            'estado'        => $request->estado,
            'titulo'        => $request->titulo,
            'subtitulo'     => $request->subtitulo
        );

        if($imagen){
            $imagenName = $imagen->getClientOriginalName();
            //Valido si existe
            if (Storage::disk('public')->exists($imagenName)) {
                $alerta = "Ya existe un archivo con el mismo nombre en el servidor.";
                return back()->withInput()->with(compact('alerta'));
            }
            //cargo la imagen
            $upload = Storage::putFileAs('public', $imagen, $imagenName);
            $url = Storage::url($imagenName);
            $data['imagen'] = $url;
            $data['nombre_imagen'] = $imagenName;
        }

        $link->fill($data);
        $link->save();
        
        $notification = "Se ha actualizado el enlace directo."; 
        return redirect('/link-directo')->with(compact('notification'));

    }

    public function destroy($id){
        $eliminar = $this->enlaceDirecto->find($id);
        if (Storage::disk('public')->exists($eliminar->nombre_imagen)) {
            $path = Storage::disk('public')->path($eliminar->nombre_imagen);
            Storage::disk('public')->delete($eliminar->nombre_imagen);
        }
        $eliminar->delete();
        $notification = "Enlace eliminado."; 
        return back()->with(compact('notification'));
    }

    
}
