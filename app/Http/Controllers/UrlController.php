<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Footer;
use App\Clases\GetIP;
use App\Visits;
use App\Clics;

class UrlController extends Controller
{


	public function enlace($id)
	{
		$link = Link::findOrFail($id);
		
		$this->addData($link);

		return redirect($link->link);
	}

	public function footer($id)
	{
		$link = Footer::findOrFail($id);
		
		$this->addData($link);
		
		

		return redirect($link->link);
	}

	private function addData($link){

		$getIP = new GetIP();
		$modelVisits = Visits::all();
		$referrer = $getIP->ipRefer();
		$arr_ip = geoip()->getLocation($getIP->getRealIP());
		$fecha_actual = date("d-m-Y");
		$clics = Clics::all();
		
		
		$data = array(
			'ip' => $arr_ip->ip,
			'refer' => $referrer,
			'country' => $arr_ip->country,
			'city' => $arr_ip->city
		);

		if(count($modelVisits) >= 1){


			foreach($modelVisits as $visit){

				$fecha_registro = date("d-m-Y", strtotime($visit->created_at));

				if($fecha_actual > $fecha_registro and $visit->ip == $arr_ip->ip){
					//dd('No funciona por fecha');
					$visita = Visits::create($data);
					$this->registerClics($visita, $link);
					

				}elseif($visit->ip != $arr_ip->ip){
					
					$ip = $arr_ip->ip;
					$exists = $modelVisits->first(function($modelVisits) use($ip) { 
						return $modelVisits->ip === $ip;
					}) !== null;

					if($exists){

					}else{
						$visita = Visits::create($data);
						$this->registerClics($visita, $link);
					}
					// dd('Error en comparacion de ips' . $visit->ip . ' ip por funcion: '. $arr_ip->ip);
					


				}elseif($fecha_actual == $fecha_registro and 
					$visit->ip == $arr_ip->ip)
				{
					$linkName = $link->name;
					
					$exists = $clics->first(function($clics) use($linkName) { 
						return $clics->name === $linkName;
					}) !== null;
					

					if($exists){
							//dd('Misma IP dando clic en otro link');

					}else{
						// dd('Error al validar si le esta dando clic al mismo enlace');
						$this->registerClics($visit, $link);

					}

					
				}


			}
		}else{

			$visita = Visits::create($data);

			$this->registerClics($visita, $link);			

			
		}


	}


	public function registerClics($visita, $link)
	{
		$clic = new Clics;

		$clic->visit()->associate($visita->id);
		$clic->name = $link->name;
		$clic->save();
	}

}
