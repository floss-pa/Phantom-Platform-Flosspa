<?php
/*
* nav.php
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

//Detecta la sección activa del menu
$dragonactive=nihil_decode($_GET["dash"]);
$dragonsection01="";
$dragonsection02="";
$dragonsection03="";
$dragoncurrentactive='class="active"';
if($dragonactive==1)
{
  $dragonsection01='class="active"';
  $dragoncurrentactive="";
}
else if($dragonactive==2)
{
  $dragonsection02='class="active"';
  $dragoncurrentactive="";
}
else if($dragonactive==3)
{
  $dragonsection03='class="active"';
  $dragoncurrentactive="";
}
else
{
  $dragoncurrentactive='class="active"';
}
?>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="phantomNavbar">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="https://floss-pa.net/" target="_blank"><img src="./images/logos/floss_pa.png" style="width:80px;"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo $dragoncurrentactive; ?>>
              <a href="./platform.io.php?lang=<?php echo $phantlang?>"><span class="fui-home"></span>&nbsp;&nbsp;Inicio</a>
            </li>
            <li <?php echo $dragonsection01; ?>>
              <a href="./whatis.io.php?lang=<?php echo $phantlang?>&dash=<?php echo nihil_encode("1"); ?>"><span class="fa fa-info"></span>&nbsp;&nbsp;Acerca del Evento</a>
            </li>
            <li <?php echo $dragonsection02; ?>>
              <a href="./record.io.php?lang=<?php echo $phantlang?>&dash=<?php echo nihil_encode("2"); ?>"><span class="fa fa-table"></span>&nbsp;&nbsp;Tablero de Puntuacion</a>
            </li>
            <li <?php echo $dragonsection03; ?>>
              <a href="./eventlist.io.php?lang=<?php echo $phantlang?>&dash=<?php echo nihil_encode("3"); ?>"><span class="fa fa-list"></span>&nbsp;&nbsp;Lista Completa del Evento</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle"></i>&nbsp;&nbsp;<?php echo $_SESSION["phantomuser"]; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="javascript:;" data-toggle="modal" data-target="#phantusersettings"><i class="fa fa-diamond"></i> Detalles</a></li>
                <li class="divider"></li>
                <li><a href="./login.php?lang=<?php echo nihil_encode("ES"); ?>"><i class="fa fa-power-off"></i> Salir</a></li>
              </ul>
            </li>
            <li><a href="javascript:;"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
