<?php

include_once "persona.php";

class empleado extends persona
{
	private $_legajo;
	private $_sueldo;
	
	function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
	{
		$this->_legajo=$legajo;
		$this->_sueldo=$sueldo;
		parent::__construct($nombre, $apellido, $dni, $sexo);
	}

	public function GetLegajo()
	{
		return $this->_legajo;
	}

	public function GetSueldo()
	{
		return $this->_sueldo;
	}

	public  function Hablar($idioma)
	{
		return "Habla el idioma: $idioma";
	}

	public function ToString()
	{
		$padre=parent::ToString();
		return $padre."-".$this->GetLegajo()."-".$this->GetSueldo();
	}
}

?>