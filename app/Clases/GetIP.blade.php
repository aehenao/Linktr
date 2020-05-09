<?php

/**
 * 
 */
namespace App\Clases;


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


}



?>