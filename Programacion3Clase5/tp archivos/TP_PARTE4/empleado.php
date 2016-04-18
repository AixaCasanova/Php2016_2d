<?php

include_once "persona.php";

class empleado extends persona
{
	private $_legajo;
	private $_sueldo;
	private $_foto;
	
	function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo,$fotoe)
	{
		$this->_legajo=$legajo;
		$this->_sueldo=$sueldo;
		$this->SetFoto($fotoe);
		parent::__construct($nombre, $apellido, $dni, $sexo);
	}

	public function GetFoto()
	{
		return $this->_foto;
	}

	public function SetFoto($foto)
	{
		$this->_foto=$foto;
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
		 
		return   $padre."-".$this->GetLegajo()."-".$this->GetSueldo()."-"."<img src=".$this->GetFoto()." width=100 height=100>";
	}
}

?>