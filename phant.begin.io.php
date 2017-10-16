<?php
/*
* phant.begin.io.php
*
* luis Daniel Mora Delgado @ BlackBohr | @fobos
*
* MIT License
*
* Copyright (c) 2017 Luis Daniel Mora Delgado / Black Bohr | @fobos
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* ----------------------------------------------------------------------------
*                           Phantom Platform
* ----------------------------------------------------------------------------
* This version of Phantom Platform is not yet a full release,
* this version uses Flat UI and some color variations, made by designmodo, please visit:
* http://designmodo.github.io/Flat-UI/ for more information
*
* This version uses PHP 7.0.X, all dependencies are included, this version doesn't use composer
* or any package manager for php, although it can be used in PHP 5.0.X but beware of some functions
* that may doesn't exist on PHP 5 or viceversa.
*
* This platform is made for FLOSSPA and events made by FLOSSPA, please visit https://floss-pa.net/
*/

//Incluir la biblioteca de funciones
require("./functions.php");

	//Credenciales de usuario y contraseña
	$phantusername=trim($_POST["logusername"]);
	$phantuserpassword=nihil_encode($_POST["logpass"]);

	//Consulta de existencia del usuario
	$phantusersql=$phantconnection01->Execute("SELECT * FROM usuarios WHERE nombreusuario='".$phantusername."' AND claveusuario='".$phantuserpassword."' ");
	$phantuserexist=$phantusersql->RecordCount();

	//Si existe, realiza acciones para llenar las variables de sesión, sino, redirecciona a login.php con un mensaje de error
	if($phantuserexist==1)
	{
		//Ahora busca las variables que estan dentro de la base de datos
		while($phantuserdata=$phantusersql->FetchRow())
		{
			//Variables del Usuario
			$phantuserticket=$phantuserdata["tiquete"];
			$phantuseremail=$phantuserdata["correoelectronico"];
			$phantusercode=$phantuserdata["codigousuario"];
			$phantusertypecode=$phantuserdata["codigotipousuario"];
			$phantusercurrentstate=$phantuserdata["codigoestado"];
			//Busca ahora el tipo de usuario en esta consulta
			$witchfinderquery=$phantconnection01->Execute("SELECT tipousuario FROM tiposusuarios WHERE codigotipousuario='".$phantusertypecode."' ");
			while($imthewitchfinder=$witchfinderquery->FetchRow())
			{
				$phantusertype=$imthewitchfinder["tipousuario"];
			}
		}
		//Deja acceder al Usuario si no esta activo en otra sesion
		if($phantusercurrentstate==5)
		{
			//User loged in queda como true, con eso se evita que se cierre la sesión caada vez que se dirija al Index
			$_SESSION["phantomuserloggedin"]=true;

			//Variables de Sesión, se pueden aplicar durante el ciclo de while, pero esta es un paso adicional más seguro para que no llegue ningun dato mal
			$_SESSION["phantomuser"]=$phantusername;
			$_SESSION["phantomuserpass"]=$phantuserpassword;
			$_SESSION["phantomusertype"]=$phantusertype;
			$_SESSION["phantomusercode"]=$phantusercode;
			$_SESSION["phantomuseremail"]=$phantuseremail;
			$_SESSION["phantomuserticket"]=$phantuserticket;

			//Actualiza el estado del usuario en la tabla usuarios, para que salga como activo
			$witchupdaterquery=$phantconnection01->Execute("UPDATE usuarios SET usuarios.codigoestado='1' WHERE nombreusuario='".$_SESSION["phantomuser"]."' ");

			//Redirect To Platform_io
			header("Location: ./web/platform.io.php?lang=".$phantlang);
		}
		else
		{
			//Redirect To Login with error message
			header("Location: ./web/login.php?lang=".$phantlang."&fatality=".nihil_encode("ERROR_2"));
		}
	}
	else
	{
		//Redirect To Login with error message
		header("Location: ./web/login.php?lang=".$phantlang."&fatality=".nihil_encode("ERROR_1"));
	}
?>
