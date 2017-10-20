<?php

/*
* record.php
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
include("../functions.php");

if($_SESSION["phantomuserloggedin"]==false)
{
  //Redirect To Login if Navigator is forced
  header("Location: ./login.php?lang=".$phantlang);
}

//Contador para aplicar mas sencillo ciertos iconos
$yzx=1;
//Para probar la hora, luego debe borrarse
$witching_hour="12:20:00";
//Ejecuta la accion de consulta para llenar la lista del evento
$hellbringereventlist=$phantconnection01->Execute("SELECT * FROM subeventos WHERE codigoevento='".$hellevent."' ORDER BY horainicio ASC ");
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

  //Para Bienvenida, el icono cambia
  if($yzx==1)
  {
    $hellicon='<i class="fa fa-home" style="color:#F5BA2D;"></i>';
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
        '.$hellbringerusertopic.'&ensp;&ensp;&ensp;<strong style="'.$hellcolor.'">'.$witchinghourbegin.' - '.$witchinghourend.'</strong>
      </h4>
      Ubicación: '.$hellbringerlocation.'. Hecho por: '.$hellbringerusername.'
    </div>
  </li>
  ';

  //Incrementa el Contador
  $yzx++;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Phantom | Floss-pa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Mobile Specific Metas -->
    <meta name="author" content="BlackBohr | Floss-pa">
    <meta name="description" content="Phantom Plaform for Floss-pa">
    <meta name="keywords" content="Phantom, BlackBohr, Floss-pa">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Libraries CSS -->
    <link rel="stylesheet" href="./stylesheets/bootstrap.css/bootstrap.css" type="text/css" media="screen">
    <!-- <link rel="stylesheet" href="./stylesheets/animate.css/animate.css" type="text/css" media="screen"> -->
    <link rel="stylesheet" href="./stylesheets/FlatUI.css/flat-ui.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./stylesheets/material_icons.css/material-icons.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./stylesheets/font-awesome.css/font-awesome.css" type="text/css" media="screen">
    <!-- Favicons For the Web Page / Special Thanks to https://realfavicongenerator.net/-->
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/favicon/manifest.json">
    <link rel="mask-icon" href="./images/favicon/safari-pinned-tab.svg" color="#ff5921">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="./images/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ff5921">
    <meta name="msapplication-TileColor" content="#FF3200">
    <meta name="theme-color" content="#FF3200">
  </head>
  <body>
    <!-- Static navbar -->
    <?php
      include("./nav.php");
    ?>
    <!-- BEGIN CONTENT -->
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="phantom_title"><i class="fa fa-list" style="color:#2C3234;"></i> Listado del Evento: <?php echo $helleventname; ?></h2>
            <div class="todo">
              <div class="todo-search">
                <input class="todo-search-field" type="search" value="" placeholder="Search" />
              </div>
              <ul>
                <?php echo $helllistconferences; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <p>One fine body…</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN FOOTER -->
    <?php
      include("./foot.php");
    ?>
    <!-- END FOOTER -->

    <!-- Javascript  -->
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="./javascript/jquery.min.js" type="text/javascript"></script>
    <script src="./javascript/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./javascript/video.js" type="text/javascript"></script>
    <script src="./javascript/flatui.js/flat-ui.js" type="text/javascript"></script>
    <script src="./javascript/flatui.js/application.js" type="text/javascript"></script>
  </body>
</html>
