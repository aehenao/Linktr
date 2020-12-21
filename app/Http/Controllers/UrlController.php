<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Footer;
use App\Clases\GetIP;
use App\Visits;
use App\Clics;
use App\EnlacesDirectos;

class UrlController extends Controller
{
	protected $enlaceDirecto;
	public function __construct(EnlacesDirectos $enlaceDirecto){
		$this->enlaceDirecto = $enlaceDirecto;
	}

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

	public function direct($id)
	{
		try{
			$link = $this->enlaceDirecto->where('enlace', '=', $id)->first();
			if($link->estado == 1) //En caso de que el enlace este desactivado.
				return redirect('/');

			$this->addData($link, 1);
			return view('reedirectPage', compact('link'));
		}catch(\Exception $e){
			return redirect('/');
		}
    }

	private function addData($link, $opc = 0){

		$getIP = new GetIP();
		$clics = Clics::all();
		
		$arr_ip = geoip()->getLocation($getIP->getRealIP());
		$fecha_actual = date("d-m-Y");
		$ip =  $arr_ip->ip;
		$dateVisits = $getIP->getDateVisits($fecha_actual, $ip);

		//dd($dateVisits);

		if(count($dateVisits) == 0){
			$visita = $getIP->registerVisits();
			$this->registerClics($visita->id, $link, $opc);
		}else{
			foreach ($dateVisits as $visit) {

					if($opc==1){
						$linkName = $link->enlace;
					}else{
						$linkName = $link->name;
					}
					
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
						
						$this->registerClics($visit['id'], $link, $opc);
						\Log::info('Dio clic en otro enlace' . $visit['ip']);
						
					}
			}
		}




	}


	public function registerClics($visitanteID, $link, $opc = 0)
	{
		$clic = new Clics;
		try{
			$clic->visit()->associate($visitanteID);

			if($opc==1){
				$clic->name = $link->enlace;
			}else{
				$clic->name = $link->name;
			}
			
			$clic->save();

		}catch(\Exception $e){
			\Log::error($e->getMessage());
		}
		
	}

}
