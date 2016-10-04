<?php

	$ch = curl_init("http://localhost/ReyDereyes/API/Grupos/todos");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	if ($info['http_code'] == 200) {
		echo "$response";	
	}else{
		echo "error".curl_error($ch);
	}

?>