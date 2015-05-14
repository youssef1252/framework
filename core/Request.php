<?php 
/**
* 
*/
class Request 
{
	public $url; //url applé par user

	function __construct()
	{
		$this->url = $_SERVER['PATH_INFO'];
	}
}

 ?>