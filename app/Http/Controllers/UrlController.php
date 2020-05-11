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
		$clics = Clics::all();
		
		$arr_ip = geoip()->getLocation($getIP->getRealIP());
		$fecha_actual = date("d-m-Y");
		$ip =  $arr_ip->ip;
		$dateVisits = $getIP->getDateVisits($fecha_actual, $ip);

		//dd($dateVisits);

		if(count($dateVisits) == 0){
			$visita = $getIP->registerVisits();
			$this->registerClics($visita->id, $link);
		}else{
			foreach ($dateVisits as $visit) {

					$linkName = $link->name;
					$clicsVisits = $getIP->getClicVisits($fecha_actual, $visit['id']);
					$exists = false;

					
					//Valido si dio clic en el enlace
					foreach ($clicsVisits as $value) {
						$exists = strcmp($value['name'], $linkName) === 0;
						if($exists)
							break;
					}

					
					if($exists){

						\Log::info("La IP {$visit['ip']} dio clic en el mismo enlace {$linkName} el mismo dia.");

					}else{
						
						$this->registerClics($visit['id'], $link);
						\Log::info('Dio clic en otro enlace' . $visit['ip']);
						
					}
			}
		}




	}


	public function registerClics($visitanteID, $link)
	{
		$clic = new Clics;
		try{

			$clic->visit()->associate($visitanteID);
			$clic->name = $link->name;
			$clic->save();

		}catch(\Exception $e){
			\Log::error($e->getMessage());
		}
		
	}

}
