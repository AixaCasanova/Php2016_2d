<?php


 
class ClassName extends AnotherClass
{
	private $_empleados;
	private $_razonSocial;

	public function GetEmpleados()
	{
		return $this->_empleados;
	}

	public function GetRazonSocial()
	{
		return $this->_razonSocial;
	}

	function __construct($razonSocial)
	{
		$this->_razonSocial=$razonSocial;
		$this->_empleados= array();
	}

	public function CalcularSueldo()
	{}

	public function EliminarEmpleado($persona)
	{}

	public function EliminarEmpleadoRepetido()
	{}

	public function ToString()
	{
		$listaemp
		foreach ($GetEmpleados() as $emp )
		 {
			$listaemp=$listaemp.$emp."-";
		}

		return GetRazonSocial()."-".$listaemp;
	}

}

?>