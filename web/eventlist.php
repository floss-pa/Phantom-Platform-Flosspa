<?php

/*
* eventlist.php
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
//Aquí se brinda la información de la tabla correspondiente al evento importada por markdown
//Debe trabajarse esa importación

//Para la seccion de administradores habra un formulario para llenar los eventos, se hará
//INSERT INTO subeventos VALUES ('EVENTO','SECUENCIA','USUARIO','CLASE DE TEMA','TEMA','LUGAR','HORA DE INICIO','HORA DE FINALIZACIÓN','COMENTARIO YA SEA HIPERVINCULO O WHATEVER')

//Contador para aplicar mas sencillo ciertos iconos
$yzx=1;
//Para probar la hora, luego debe borrarse
$witching_hour="12:20:00";
//Ejecuta la accion de consulta para llenar la lista del evento
$hellbringereventlist=$phantconnection01->Execute("SELECT * FROM subeventos WHERE codigoevento='".$hellevent."' AND horainicio>'".$witching_hour."' ORDER BY horainicio ASC LIMIT 5 ");
while($hellbringereventdata=$hellbringereventlist->FetchRow())
{
  $hellbringerusercode=$hellbringereventdata["codigousuario"];
  $hellbringerusertopictype=$hellbringereventdata["tipotema"];
  $hellbringerusertopic=$hellbringereventdata["tema"];
  $hellbringerlocation=$hellbringereventdata["ubicacion"];
  $witchinghourbegin=$hellbringereventdata["horainicio"];
  $witchinghourend=$hellbringereventdata["horafinal"];

  //Traer el nombre del usuario organizador
  $hellbringerusernamequery=$phantconnection01->Execute("SELECT nombreusuario FROM usuarios WHERE codigousuario='".$hellbringerusercode."' ");
  while($hellbringerusernamedata=$hellbringerusernamequery->FetchRow())
  {
    $hellbringerusername=$hellbringerusernamedata["nombreusuario"];
  }

  //Marca la lista si ya se hizo la actividad, sino, no se marca
  if($witching_hour<$witchinghourbegin)
  {
    $witchinghourpass='';
    $hellcolor="color:#2DF535;";
  }
  else if ($witching_hour>$witchinghourbegin && $witching_hour<$witchinghourend)
  {
    $witchinghourpass='';
    $hellcolor="color:#F5BA2D;";
  }
  else if($witching_hour>$witchinghourend)
  {
    $witchinghourpass='class="todo-done"';
    $hellcolor="color:#A40403;";
  }

  //Inicializa vacia, solamente se llena cuando es un evento cercano
  $hellmessage="";

  //Para el evento que va a seguir, el icono cambia y el color tambien, manda adicionalmente un mensaje
  if($yzx==1)
  {
    $hellicon='<i class="fa fa-gear" style="color:#F5BA2D;"></i>';
    $hellmessage="¡EVENTO COMENZANDO!";
    $hellcolor="color:#FF510F;";
  }
  else
  {
    //Para, Talleres, Conferencias, Almuerzo o Merienda, el icono cambia
    if($hellbringerusertopictype=="ALMUERZO")
    {
      $hellicon='<i class="fa fa-cutlery" style="color:#F5BA2D;"></i>';
    }
    else if($hellbringerusertopictype=="CONFERENCIA")
    {
      $hellicon='<i class="fa fa-users"></i>';
    }
    else if($hellbringerusertopictype=="TALLERES")
    {
      $hellicon='<i class="fa fa-handshake-o"></i>';
    }
  }

  //Falta un icono para indicar la finalizacion del evento

  $helllistconferences.='
  <li '.$witchinghourpass.'>
    <div class="todo-icon">'.$hellicon.'</div>
    <div class="todo-content">
      <h4 class="todo-name">
        '.$hellbringerusertopic.'&ensp;&ensp;&ensp;<strong style="'.$hellcolor.'">'.$hellmessage.' '.$witchinghourbegin.' - '.$witchinghourend.'</strong>
      </h4>
      Ubicación: '.$hellbringerlocation.'. Hecho por: '.$hellbringerusername.'
    </div>
  </li>
  ';

  //Incrementa el Contador
  $yzx++;
}

echo '<h2 class="phantom_title"><i class="fa fa-list" style="color:#2C3234;"></i> Listado del Evento: '.$helleventname.'</h2>';
echo '
  <div class="row">
    <div class="col-xs-12">
      <div class="todo">
        <div class="todo-search">
          <input class="todo-search-field" type="search" value="" placeholder="Search" />
        </div>
        <ul>
          '.$helllistconferences.'
        </ul>
      </div>
    </div>
  </div>';
?>
