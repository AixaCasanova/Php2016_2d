 <?php
 class Alumno
	{	
		public $Nombre;
		public $Apellido;

		public function Mostrar()
		{
		$this->RetornarDatos();
		}

		private function RetornarDatos()
		{
			echo "<br>";
			echo "Su nombre es: ".$this->Nombre."<br>";
			echo "Su Apellido es: ".$this->Apellido."<br>";
		}

		public static function MostrarEstaticos($alumno)
		 {
		 	$alumno->Mostrar();
		 }

	}
 ?>