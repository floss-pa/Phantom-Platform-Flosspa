<?php
/*
* functions.php
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

/*Para la plataforma, en si iba a tener un codificador propio, pero se uso base_64 por que no se termino ese codificador y se utiliza 3 veces en
* todas las variables codificadas. Es una mala practica pero es para esta versión solamente */

//Para Markdown
require_once("web/php/md.php/Parsedown.php");

//Para adodb
require_once("web/php/config.io.php");

//Para correos
require_once("web/php/mailer.php/PHPMailerAutoload.php");

//Fecha y Hora actual
$phant_actual_time=date("Y-m-d H:i:s");

//Hora actual
$witching_hour=date("H:i:s");

//Para los correos, se define esta cadena, si desea ser cambiada, solo cambien el nombre de esta
$phantomapp="FLOSSPA PHANTOM PLATFORM";

//Lenguaje o Idioma (Tendra otras funcionalidades en el futuro)
$phantlang=nihil_encode("ES");

//e-Mail del sistema, puede cambiarse si se desea, pero debe tener activada la API de gmail para enviar correos, de lo contrario, no funcionará algunas caracteristicas
$phantomwitchmail="api.platform.phant@gmail.com";

//QR HREF, aquí se debe cambiar el valor del QR en caso de cada evento
$phantomqrhref="./images/qr/sfd.png";

//Event Link, aquí se cambia el valor del tag <a> para el evento en el href
$phantomeventurl="https://www.eventbrite.com/e/software-freedom-day-panama-2017-tickets-38042449992?aff=eand";

//Debe cambiarse esta variable cuando este vencido el evento
//$hellbringereventlist=$phantconnection01->Execute("SELECT * FROM eventos WHERE fechainicioevento<'".$phant_actual_time."' AND fechafinevento>'".$phant_actual_time."' ");
$hellbringereventlist=$phantconnection01->Execute("SELECT * FROM eventos WHERE fechainicioevento<'2017-10-07 01:01:00' AND fechafinevento>'2017-10-07 01:01:00' ");
while($hellbringereventdata=$hellbringereventlist->FetchRow())
{
  $hellevent=$hellbringereventdata["codigoevento"];
  $helleventname=$hellbringereventdata["tituloevento"];
}

//Tiene una utilidad a futuro con los qr y la base de datos
//$_SERVER["REQUEST_URI"];

//Codificador con Base 64 3 veces
function nihil_encode($string)
{
  $phantstring=base64_encode(base64_encode(base64_encode($string)));
  return $phantstring;
}
//Decodificador con Base 64 3 veces
function nihil_decode($string)
{
  $phantstring=base64_decode(base64_decode(base64_decode($string)));
  return $phantstring;
}

//Crea Contraseñas aleatorias
function phantompassgenerator($length=12,$mayus=TRUE,$numbers=TRUE,$varchars=FALSE)
{
    //Abecedario en minusculas
    $phantsource = 'abcdefghijklmnopqrstuvwxyz';
    //Añade las letras en mayuscula si $mayus == true o $mayus == 1
    if($mayus==1)
    {
      $phantsource .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    //Añade números al string si $numbers == true o $numbers == 1
    if($numbers==1)
    {
      $phantsource .= '1234567890';
    }
    //Es opcional para ser activado, pero debe ser en la declaración de la función para ser usado
    if($varchars==1)
    {
      $phantsource .= '@#$%=*+-';
    }
    //Ciclo de repetición y condicion If para retornar la cadena modificada
    if($length>0)
    {
        //Inicializa la cadena a modificar
        $phantomstring = "";
        //Separa una letra de la fuente
        $phantsource = str_split($phantsource,1);
        //Inicia el ciclo de repetición
        for($i=1; $i<=$length; $i++)
        {
            //Realiza un calculo con el tiempo para seleccionar una letra al azar
            mt_srand((double)microtime() * 1000000);
            //Selecciona el número a poner en el string
            $num = mt_rand(1,count($phantsource));
            //Añade letra al string
            $phantomstring .= $phantsource[$num-1];
        }
    }
    return $phantomstring;
}

//La cookie de sesión inicia, no borrar, debido a que con el include de functions, esta cookie funciona para todas las paginas ya que tienen acciones con $_SESSION, si lo borra, causara una inestabilidad del sistema y errores en la plataforma.
session_start();
?>
