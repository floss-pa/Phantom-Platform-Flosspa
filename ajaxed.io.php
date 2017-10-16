<?php
/*
* ajaxed.io.php
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

include("./functions.php");
//Contiene el valor de ajaxprocess
$ajaxproc=$_GET["ajaxproc"];

//Instanciar el sistema de correo
$phantmail=new PHPMailer;
$phantmail->isSMTP();
$phantmail->Host='smtp.gmail.com';
//$phantmail->Timeout=$getsystememailtimeout;
$phantmail->CharSet='UTF-8';
$phantmail->SMTPAuth=true;
$phantmail->Username=$phantomwitchmail;
$phantmail->Password='fL0$$pA20I7';
$phantmail->SMTPSecure='tls';
$phantmail->Port='587';

//Solo para registro
if($ajaxproc=="AP 001")
{
	//Registrar nombre de usuario, correo y el tiquete, deben ser unicos, si existen, debe tirar error
	$phantregusername=trim($_POST["regusername"]);
	$phantreguseremail=trim($_POST["regmail"]);
	$phantreguserticket="#".$_POST["regticket"];
	$phantreguserpass=nihil_encode($_POST["regpass"]);

	//Consulta de existencia del usuario
	$phantregusersql=$phantconnection01->Execute("SELECT * FROM usuarios WHERE nombreusuario='".$phantregusername."' OR correoelectronico='".$phantreguseremail."' OR tiquete='".$phantreguserticket."' ");
	$phantreguserexist=$phantregusersql->RecordCount();
  //Verificacion
  if($phantreguserexist==1)
  {
    //Mensaje de advertencia
    echo "<p class='log-paragraph text-warning'>El usuario ya existe, intentelo de nuevo.</p>";
  }
  else
  {
    //Secuenciadorde usuarios
    $phantomuser=$phantconnection01->GenID($phantomusersequence='secuenciasusuarios',$startID=1);
    //Query de Registros
    $witchregisterquery=$phantconnection01->Execute("INSERT INTO usuarios VALUES ('".$phantomuser."','3','".$phantregusername."','".$phantreguserpass."','".$phantreguserticket."','5','".$phantreguseremail."') ");
		//Inicia con 0 todas las condiciones del usuario y el mas adelante decidira lo que desee activar
		$witchparticipationquery=$phantconnection01->Execute("INSERT INTO condicionesusuario VALUES ('".$phantomuser."','0','0') ");

    //Mensaje de exito
    echo "<p class='log-paragraph text-info'>¡Exito! Su usuario ya ha sido registrado, dirijase a <a id='regenter' href='#login'>Entrar</a>.</p>";

		//Remitente y Destinatario
		$phantmail->setFrom($phantomwitchmail,$phantomapp);
		$phantmail->AddReplyTo($phantomwitchmail,$phantomapp);
		$phantmail->addAddress($phantreguseremail);
		$phantmail->IsHTML(true);

		//Mensaje de actualización
		$phantmail->Subject="CREACIÓN DE CUENTA";
		$phantmail->Body="
		<html>
		<head>
			<title>".$phantomapp."</title>
		</head>
		<body>
			<a href="">
				<img src='./web/images/logos/floss_pa.png' style='width:80%;'>
			</a>
			<p style='font-size:1.3em;'>Se ha generado creado satisfactoriamente su usuario en la fecha <strong>".$phant_actual_time."</strong></p>
				<p style='font-size:1.3em;color:#FF4A3A;'>Sus credenciales son: </p>
				<div style='padding-left:20px;'>
					<p><strong>Nombre de Usuario: </strong>".$phantusername."</p>
					<p><strong>Clave de Usuario: </strong>".nihil_decode($phantomnewpasswordhardcoded)."</p>
				</div>
				<br><p>Por favor, recuerde indicarnos si desea estar en nuestra mail list para recibir actualizaciones, para hacerlo, entre a la plataforma y busque el icono del engranaje, marcando la opcion de recibir notificaciones.</p>
			</body>
		</html>";
		//Error del Envio del Mensaje
		if(!$phantmail->send())
		{
			echo 'Mailer Error: '.$phantmail->ErrorInfo;
		}

    //Bloquea el botón enviar
    echo '<script type="text/javascript">$("#registerbtn").attr("disabled", true);
      //Restablecer campos desactivados en login
      $("#logusername").attr("disabled", false);
      $("#logpass").attr("disabled", false);
      $("#logbtn").attr("disabled", false);
    </script>';
    echo '<script type="text/javascript">$("#regenter").on("click",function(e)
    {
      e.preventDefault();
      var href = $(this).attr("href");
      //Acciones
      $(".active").removeClass("active");
      $(".show").removeClass("show").addClass("hide").hide();
      $(href).removeClass("hide").addClass("show").hide().fadeIn(550);
    });
    </script>';
  }
}
//Solo para reestablecer contraseña
else if($ajaxproc=="AP 002")
{
  //Credenciales de usuario y contraseña
	$phantresetuseremail=$_POST["resetmail"];
  $phantresetuserticket="#".$_POST["resetticket"];

	//Consulta de existencia del usuario
	$phantresetusersql=$phantconnection01->Execute("SELECT * FROM usuarios WHERE correoelectronico='".$phantresetuseremail."' AND tiquete='".$phantresetuserticket."' ");
	$phantresetuserexist=$phantresetusersql->RecordCount();

	//Verificacion
  if($phantresetuserexist==1)
  {
    //Mensaje de exito
    echo '<p class="log-paragraph text-success">¡En horabuena! Se le ha enviado una nueva contraseña a su correo electronico. Dirijase a <a id="resetenter" href="#login">Entrar</a> con su nueva contraseña.</p>';

		while($phantresetuserdata=$phantresetusersql->FetchRow())
		{
			$phantusername=$phantresetuserdata["nombreusuario"];
		}

		$phantomnewpasswordgenerated=phantompassgenerator();
		$phantomnewpasswordhardcoded=nihil_encode($phantomnewpasswordgenerated);

		//Actualiza contraseña del Usuario
		$witchresetuserquery=$phantconnection01->Execute("UPDATE usuarios SET claveusuario='".$phantomnewpasswordhardcoded."' WHERE correoelectronico='".$phantresetuseremail."' AND tiquete='".$phantresetuserticket."' ");

		//Remitente y Destinatario
		$phantmail->setFrom($phantomwitchmail,$phantomapp);
		$phantmail->AddReplyTo($phantomwitchmail,$phantomapp);
		$phantmail->addAddress($phantresetuseremail);
		$phantmail->IsHTML(true);

		//Mensaje de actualización
		$phantmail->Subject="RECUPERACIÓN DE CUENTA";
		$phantmail->Body="
		<html>
		<head>
			<title>".$phantomapp."</title>
		</head>
		<body>
			<a href="">
				<img src='./web/images/logos/floss_pa.png' style='width:80%;'>
			</a>
			<p style='font-size:1.3em;'>Se ha generado una nueva contraseña para su usuario en la fecha <strong>".$phant_actual_time."</strong></p>
				<p style='font-size:1.3em;color:#FF4A3A;'>Sus nuevas credenciales son: </p>
				<div style='padding-left:20px;'>
					<p><strong>Nombre de Usuario: </strong>".$phantusername."</p>
					<p><strong>Clave de Usuario: </strong>".nihil_decode($phantomnewpasswordhardcoded)."</p>
				</div>
				<br><p>Porfavor, recuerde luego cambiar su contraseña por una nueva que le sea fácil de recordar, la contraseña puede ser cambiada en la plataforma, en el icono de la tuerca.</p>
			</body>
		</html>";
		//Error del Envio del Mensaje
		if(!$phantmail->send())
		{
			echo 'Mailer Error: '.$phantmail->ErrorInfo;
		}

    //Bloquea el botón enviar
    echo '<script type="text/javascript">$("#resetbtn").attr("disabled", true);
      //Restablecer campos desactivados en login
      $("#logusername").attr("disabled", false);
      $("#logpass").attr("disabled", false);
      $("#logbtn").attr("disabled", false);
    </script>';
    echo '<script type="text/javascript">$("#resetenter").on("click",function(e)
    {
      e.preventDefault();
      var href = $(this).attr("href");
      //Acciones
      $(".active").removeClass("active");
      $(".show").removeClass("show").addClass("hide").hide();
      $(href).removeClass("hide").addClass("show").hide().fadeIn(550);
    });
    </script>';
  }
  else
  {
    //Mensaje de Error
    echo "<p class='log-paragraph text-warning'>No existe el correo o no existe el número de tiquete, por favor revise e intentelo nuevamente.</p>";
  }
}
?>
