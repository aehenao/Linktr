<?php

/**
 * 
 */
namespace App\Clases;

use App\Visits;

class GetIP 
{

	public function getRealIP() {

		if (!empty($_SERVER['HTTP_CLIENT_IP']))
			return $_SERVER['HTTP_CLIENT_IP'];

		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			return $_SERVER['HTTP_X_FORWARDED_FOR'];

		return $_SERVER['REMOTE_ADDR'];
	}

	public function ipRefer(){

		if (!empty($_SERVER['HTTP_REFERER']))
			return $_SERVER['HTTP_REFERER'];

	}

	//Registro la visita
	 public function registerVisits()
    {
    	$arr_ip = geoip()->getLocation($this->getRealIP());
        $referrer = $this->ipRefer();

    	$data = array(
            'ip' => $arr_ip->ip,
            'refer' => $referrer,
            'country' => $arr_ip->country,
            'city' => $arr_ip->city
        );
        
        try{

           $visita = Visits::create($data);

           return $visita;

        }catch(\Exception $e){
            \Log::error($e->getMessage());
        }
        
    }
    //Consulto si es la misma ip en el mismo dia
    public function getDateVisits($fechaActual, $ip)
    {
        return Visits::select('id','ip')->where('ip', $ip)->whereDay('created_at', $fechaActual)->get()->toArray();
    }



}



?>