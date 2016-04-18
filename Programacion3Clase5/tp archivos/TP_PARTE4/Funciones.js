function ValidarCadena(cadenaAValidar)
{
	if (cadenaAValidar == null || cadenaAValidar == "") 
	{
		return false;
	}
	else
	{
		return true
	}
}

function ValidarNumero(valor)
{
	if ($.IsNumeric(valor)) {return true;} else{return false;}
}

function MostrarErrores(arrayIdsErrores) 
{
	for (var i = arrayIdsErrores.length - 1; i >= 0; i++) 
	{
		if(document.getElementById(arrayIdsErrores[i]))
		{
		 
			document.getElementById("Nom").innerHTML= "*"; 

		}
	}
}


function EnviarDatos()
{

	var StringError="";
	var arrayIdsErrores=[];
	if (ValidarCadena(document.getElementById("Nombre").value) == false ) { 
		StringError = StringError + "El Nombre es requerido \n";
		arrayIdsErrores.push(document.getElementById("Nombre"));
	}
	
	if (ValidarCadena(document.getElementById("Apellido").value) == false ) { 
		StringError = StringError + "El Apellido es requerido \n";
		arrayIdsErrores.push(document.getElementById("Apellido"));
	}
	
	if (ValidarCadena(document.getElementById("Dni").value) == false ) { 
		StringError = StringError + "El Dni es requerido \n";
		arrayIdsErrores.push(document.getElementById("Dni"));
	}
	
	if (ValidarCadena(document.getElementById("Sexo").value) == false ) { 
		StringError = StringError + "El Sexo es requerido \n";
		arrayIdsErrores.push(document.getElementById("Sexo"));
	}
	
	if (ValidarCadena(document.getElementById("Legajo").value) == false ) { 
		StringError = StringError + "El Legajo es requerido \n";
		arrayIdsErrores.push(document.getElementById("Legajo"));
	}

	if (ValidarCadena(document.getElementById("Sueldo").value) == false ) { 
		StringError = StringError + "El Sueldo es requerido \n";
		arrayIdsErrores.push(document.getElementById("Sueldo"));
	}

	console.log(arrayIdsErrores);
	//MostrarErrores(arrayIdsErrores);
	alert(StringError);
}