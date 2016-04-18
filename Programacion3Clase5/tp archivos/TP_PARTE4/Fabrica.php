<?php


 
class fabrica 
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
	{
		   unset($_empleados[$per]);
	}

	public function EliminarEmpleadoRepetido()
	{
	   //array_unique($this->_empleados);
	}

	public function AgregarEmpleado($per)
	{
		array_push($this->_empleados, $per);
		$this->EliminarEmpleadoRepetidos();
	}

	public function ToString()
	{
		$listaemp
		foreach ($GetEmpleados() as $emp )
		 {
			$listaemp=$listaemp.$emp."-";
		}

		return GetRazonSocial()."-".$listaemp;
	}

	public static function ObtenerEmpleadosTxt()
	{
		$op = fopen("empleados.txt", "r");
		while(!feof($op))
		{

			$RENGLON = fgets($op);
			$arrayUnEmpleado = explode("-", $RENGLON);
		 
			for ($i=0; $i < count($arrayUnEmpleado)  ; $i++) { 
				# code...
				if ($arrayUnEmpleado[$i] !=  null ) {
				$empleado = new empleado($arrayUnEmpleado[0],$arrayUnEmpleado[1], $arrayUnEmpleado[2],$arrayUnEmpleado[3] , $arrayUnEmpleado[4], $arrayUnEmpleado[5] );
				
				} 
			}
			 if ($RENGLON !=null || $RENGLON != "") {
 	 
 			AgregarEmpleado($empleado);

			}
			
			
		}
	}

	public function guardar($fabrica)
	{
		$archivo=fopen("empleados.txt", "a");  
	
		if(fwrite($archivo, $fabrica->ToString()."\r\n"))
		{   
			fclose($archivo);  
			return true;
		}else{return false;}
	}

	public function ToArray()
	{
		return GetEmpleados();
	}

}

?>