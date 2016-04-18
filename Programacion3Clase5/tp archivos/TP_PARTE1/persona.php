<?php

	abstract class persona  
	{	

		private $_apellido;
		private $_nombre;
		private $_dni;
		private $_sexo;

		function __construct($nombre, $apellido, $dni, $sexo)
		{
			$this->_nombre=$nombre;
			$this->_apellido=$apellido;
			$this->_dni=$dni;
			$this->_sexo=$sexo;
		}

		public function GetNombre()
		{
			return $this->_nombre;
		}

		public function GetApellido()
		{
			return $this->_apellido;
		}

		public function GetDni()
		{
			return $this->_dni;
		}

		public function GetSexo()
		{
			return $this->_sexo;
		}


		public function ToString()
		{
			$persona=$this->GetNombre()."-".$this->GetApellido()."-".$this->GetDni()."-".$this->GetSexo();
			return $persona;
		}

		public function Hablar($idioma)
		{
			return "Habla el idioma: $idioma";
		}

	}


?>