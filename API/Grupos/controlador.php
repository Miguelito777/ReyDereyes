<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	include 'modelo.php';

	if($_GET["solicitud"] == "todos"){
		$ministrie = new Ministrie();
		$ministries = $ministrie->getAllMinistries();
		$ministriesC = utf8_encode_recursive($ministries);
		echo json_encode($ministriesC);
	}
	else{
		header('HTTP/1.1 405 Method Not Allowed');
		exit;
	}





	function utf8_encode_recursive ($array)
	{
	    $result = array();
	    foreach ($array as $key => $value)
	    {
	        if (is_array($value))
	        {
	            $result[$key] = utf8_encode_recursive($value);
	        }
	        else if (is_string($value))
	        {
	            $result[$key] = utf8_encode($value);
	        }
	        else
	        {
	            $result[$key] = $value;
	        }
	    }
	    return $result;
	}
?>