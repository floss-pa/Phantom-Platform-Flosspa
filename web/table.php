<?php

/*
* table.php
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

//Contador para actualizar la posicion dinamicamente
$xyz=1;

$witchfindertablequery=$phantconnection01->Execute("SELECT * FROM usuarios JOIN tablero ON usuarios.codigousuario=tablero.codigousuario JOIN estados ON usuarios.codigoestado=estados.codigoestado WHERE usuarios.codigotipousuario='3' ORDER BY tablero.puntuacion DESC LIMIT 5");
while($witchfindertabledata=$witchfindertablequery->FetchRow())
{
  $witchfoundedusername=$witchfindertabledata["nombreusuario"];
  $witchfoundedusercode=$witchfindertabledata["codigousuario"];
  $witchfoundedpoints=$witchfindertabledata["puntuacion"];
  $witchfoundedeastereggs=$witchfindertabledata["encontrados"];
  $witchstate=$witchfindertabledata["estado"];

  //Actualiza la puntuacion del usuario dependiendo del puntaje que posea
  $yetiupdatetable=$phantconnection01->Execute("UPDATE tablero SET posicion='".$xyz."' WHERE codigousuario='".$witchfoundedusercode."' ");

  //Solo deseo saber el número de los encontrados, por lo que convierto mi string a un array con la función explode
  $witchfoundedeasterarray=explode(",", $witchfoundedeastereggs);
  $witchfoundedeastercount=count($witchfoundedeasterarray);

  //Para colorear o activar la clase
  $phantomusercolor="";
  $phantomuserclass="";
  $phantomtableicon="";
  $kingicon="";

  //Activo la acción de pintar el nombre del usuario actual, solo aplican a los usuarios participantes
  if($_SESSION["phantomuser"]==$witchfoundedusername)
  {
    $phantomusercolor='style="background-color:#70FA83;"';
    $phantomuserclass='';
  }
  else
  {
    $phantomusercolor="";
    $phantomuserclass="";
  }

  //Coloca iconos de copas dependiendo de la posición
  if($xyz==1)
  {
    $kingicon='<i class="fa fa-trophy" style="color:#F8C911;"></i>';
  }
  else if($xyz==2)
  {
    $kingicon='<i class="fa fa-trophy" style="color:#ADACA9;"></i>';
  }
  else if($xyz==3)
  {
    $kingicon='<i class="fa fa-trophy" style="color:#9F2F00;"></i>';
  }
  else
  {
    $kingicon="";
  }

  //Coloca iconos si los usuarios estan activos o inactivos
  if($witchstate=="ACTIVO")
  {
    $phantomtableicon='<i class="fa fa-check" style="color:#00DB29;"></i>';
  }
  else
  {
    $phantomtableicon='<i class="fa fa-remove" style="color:#FF1515;"></i>';
  }

  $witchtabledata.='
  <tr '.$phantomusercolor.'>
    <td scope="row">'.$xyz.'</th>
    <td>'.$kingicon.' '.$witchfoundedusername.'</td>
    <td>'.$witchfoundedpoints.'</td>
    <td>'.$witchfoundedeastercount.'</td>
    <td>'.$witchstate.' '.$phantomtableicon.'</td>
  </tr>';

  //Incrementa el contador de posición
  $xyz++;
}

//Añade secciones a la tabla dependiendo de la clase de usuario
//if($_SESSION["phantomusertype"]=="")

echo '<h2 class="phantom_title"><i class="fa fa-bar-chart" style="color:#2C3234;"></i> Tablero de Puntuaciones</h2>';
echo '
<div class="row">
  <table class="table table-striped table-hover">
    <thead class="thead-inverse">
      <tr>
        <th>Posición</th>
        <th>Nombre Usuario</th>
        <th>Puntuación</th>
        <th>Huevos de Pascua Encontrados</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      '.$witchtabledata.'
    </tbody>
  </table>
</div>';
?>
