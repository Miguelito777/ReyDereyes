<?php
	
/**
* Clase para conexion
*/
class Conection
{
	public $linkConection;
	function __construct()
	{
		$this->linkConection = new mysqli("192.168.1.2","root","Jesus8","ReydereyesToto");
		$this->linkConection->query("SET NAMES 'utf8'");
	}	
}
/**
* Clase Ministerios
*/
class Ministrie extends Conection
{
	
	function __construct()
	{
		# code...
	}

	public function getAllMinistries(){
		$query = "SELECT * from Grupos";
		parent:: __construct();
		$grupos = $this->linkConection->query($query);
		$query = "SELECT * from Grupos";
		$this->linkConection->close();		
		$gruposA = array();
		while ($grupo = $grupos->fetch_assoc()) {
			$grupoA = array();
			foreach ($grupo as $key => $value) {
				$grupoA[$key] = $value;
			}
			array_push($gruposA,$grupoA);
		}
		return $gruposA;
	}
}
?>