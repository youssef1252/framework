<?php 
/**
* 
*/
class Router 
{

	/**
	* Permet de parser une url
	* @param url à parser
	* @return tableau contenant les paramétres 
	**/
	static function parse($url, $request){
		$url = trim($url, '/'); // ignorer les slaches
 	 	$params = explode('/',$url);
 	 	$request->controller = $params[0];
 	 	$request->action = isset($params[1]) ? $params[1] : 'index';
 	 	$request->params = array_slice($params, 2);
 	 	return true;
	}
}

 ?>