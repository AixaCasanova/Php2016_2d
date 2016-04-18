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
	for (var i = arrayIdsErrores.length - 1; i >= 0; i--) 
	{
		if(document.getElementById(arrayIdsErrores[i]))
		{
			document.write(" <span id=’’ style=’display:none’ > * </span>");
		}
	}
}


function EnviarDatos()
{
	var StringError="";
	if (ValidarCadena(document.getElementById("Nombre")) == false ) { StringError = StringError + "El Nombre es requerido \n";}
	if (ValidarCadena(document.getElementById("Apellido")) == false) { StringError = StringError + "El Nombre es requerido \n";}
	if (ValidarCadena(document.getElementById("Sexo"))== false ) { StringError = StringError + "El Nombre es requerido \n";}
	if (ValidarCadena(document.getElementById("Dni"))== false ) { StringError = StringError + "El Nombre es requerido \n";}
	if (ValidarCadena(document.getElementById("Legajo"))== false ) { StringError = StringError + "El Nombre es requerido \n";}
	if (ValidarCadena(document.getElementById("Sueldo"))== false ) { StringError = StringError + "El Nombre es requerido \n";}
	alert(StringError);
}