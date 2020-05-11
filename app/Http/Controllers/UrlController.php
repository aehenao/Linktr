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
				
					$exists = $clics->first(function($clics) use($linkName) { 
						return $clics->name === $linkName;
					}) !== null;
					
					
					if($exists){
						\Log::info($visit['ip'] .' Dio clic en el mismo enlace ' .$linkName );
						//dd($visit['ip'] .' Dio clic en el mismo enlace ' .$linkName );

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
