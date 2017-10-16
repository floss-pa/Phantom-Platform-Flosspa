<?php
/*
* login.php
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

//Actualiza el estado del usuario en la tabla usuarios, para que salga como inactivo, solo sirve si la sesión fue iniciada
$witchupdaterquery=$phantconnection01->Execute("UPDATE usuarios SET usuarios.codigoestado='5' WHERE nombreusuario='".$_SESSION["phantomuser"]."' ");

//La sesión queda nula cuando se entra al login
$_SESSION["phantomuserloggedin"]=false;

//Elimina variables completas de la sesión
unset($_SESSION);

//Destruye la sesión
session_destroy();
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
    <link rel="stylesheet" href="./stylesheets/log.css" type="text/css" media="screen">
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
  <body class="login">
    <!-- Static navbar -->
    <?php
      include("../nav.php");
    ?>
    <!-- BEGIN CONTENT -->
    <div class="log-contain">
      <!-- BEGIN ROW -->
      <div class="fui-form">
        <ul class="tabs">
          <!-- BEGIN TAB NAVIGATOR -->
          <li>
            <a href="#login" class="tab-nav active"><i class="fa fa-sign-in"></i> Entrar</a>
          </li>
          <li>
            <a href="#register" class="tab-nav"><i class="fa fa-user-plus"></i> Registrar</a>
          </li>
          <li>
            <a href="#reset" class="tab-nav"><i class="fa fa-key"></i> Restablecer Contraseña</a>
          </li>
          <li>
            <a href="#ticket" class="tab-nav"><i class="fa fa-ticket"></i> Tiquete</a>
          </li>
        </ul>
        <!-- END TAB NAVIGATOR -->

        <!-- BEGIN LOGIN TAB -->
        <div id="login" name="login" class="form-action show">
          <h1 class="form-title">Entrar a la Plataforma</h1>
          <?php
            if(nihil_decode($_GET["fatality"])=="ERROR_2")
            {
              echo '<p class="log-paragraph text-danger">El usuario ya posee una sesión activa, si desea crear una cuenta dirijase a <strong><a class="phantlinker" href="#register">Registrarse</a>.</p>';
              $phantlock="disabled";
            }
            else if(nihil_decode($_GET["fatality"])=="ERROR_1")
            {
              echo '<p class="log-paragraph">Usted no posee una cuenta válida para la plataforma, por favor dirijase a <strong><a class="phantlinker" href="#register">Registrarse</a>.</p>';
              $phantlock="disabled";
            }
            else
            {
              echo '<p class="log-paragraph">En esta pestaña usted entrará a la plataforma de Huevos de Pascua, si no tiene cuenta, dirijase a <strong><a class="phantlinker" href="#register">Registrarse</a><strong>.</p>';
              $phantlock="";
            }
          ?>
          <form class="login-form" name="login_form_begin" id="login_form_begin" action="../phant.begin.io.php?lang=<?php echo nihil_encode($phantlang); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input id="logusername" name="logusername" class="form-control login-field" type="text" placeholder="Nombre" data-rule-required="true" data-msg-required="Introduzca un Nombre de Usuario." <?php echo $phantlock; ?>/>
                  <label class="login-field-icon fui-user" for="logusername"></label>
                </div>
                <div class="form-group">
                  <input id="logpass" name="logpass" class="form-control login-field" type="password" placeholder="Contraseña" data-rule-required="true" data-msg-required="Introduzca la Contraseña." data-rule-maxlength="15" data-msg-maxlength="Solo se permiten 15 caracteres máximo." <?php echo $phantlock; ?>/>
                  <label class="login-field-icon fui-lock" for="logpass"></label>
                </div>
                <button id="logbtn" type="submit" class="btn btn-primary btn-lg btn-block"  <?php echo $phantlock; ?>>Entrar</button>
                <a class="login-link phantlinker" href="#reset">¿Olvido su contraseña?</a>
          </form>
        </div>
        <!-- END LOGIN TAB -->

        <!-- BEGIN REGISTER TAB -->
        <div id="register" name="register" class="form-action hide">
          <h1 class="form-title">Registrarse</h1>
          <div id="regreplacer">
            <p class="log-paragraph">Debe registrarse usando su número de tiquete, su nombre, contraseña y correo electronico. Al registrarse usted entrará y decidira si desea recibir noticias de <a href="https://floss-pa.net/" target="_blank">FLOSS-PA</a> para proximos eventos a su correo haciendo click al engranaje en el navegador.</p>
          </div>
          <form class="login-form" name="form_register" id="form_register" enctype="multipart/form-data">
              <div class="form-group">
                <input id="regmail" name="regmail" class="form-control login-field" type="mail" placeholder="e-Mail" data-rule-required="true" data-msg-required="Introduzca un Email" data-rule-email="true" data-msg-email="Email Inválido. Introduzca uno válido."/>
                <label class="login-field-icon fui-mail" for="regmail"></label>
              </div>
              <div class="form-group">
                <input id="regusername" name="regusername" class="form-control login-field" type="text" placeholder="Nombre" data-rule-required="true" data-msg-required="Introduzca un Nombre de Usuario."/>
                <label class="login-field-icon fui-user" for="regusername"></label>
              </div>
              <div class="form-group">
                <input id="regpass" name="regpass" class="form-control login-field" type="password" placeholder="Contraseña" data-rule-required="true" data-msg-required="Introduzca una contraseña" data-rule-minlength="6" data-msg-minlength="La contraseña debe tener más de 6 caracteres." data-rule-maxlength="15" data-msg-maxlength="Solo se permiten 15 caracteres máximo."/>
                <label class="login-field-icon fui-lock" for="regpass"></label>
              </div>
              <div class="form-group">
                <input id="regpassrepeat" name="regpassrepeat" class="form-control login-field" type="password" placeholder="Repita Contraseña" data-rule-required="true" data-msg-required="La contraseña debe repetirse." data-rule-minlength="6" data-msg-minlength="La contraseña debe tener más de 6 caracteres." data-rule-maxlength="15" data-msg-maxlength="Solo se permiten 15 caracteres máximo." data-rule-equalto="#regpass" data-msg-equalto="Las contraseñas no coinciden."/>
                <label class="login-field-icon fui-lock" for="regpassrepeat"></label>
              </div>
              <div class="form-group">
                <input id="regticket" name="regticket" class="form-control login-field" type="text" maxlength="21" placeholder="# Tiquete" data-rule-required="true" data-msg-required="Introduzca el número del Tiquete." />
                <label class="login-field-icon fui-document" for="regticket"></label>
              </div>
              <button type="submit" class="btn btn-info btn-lg btn-block" id="registerbtn" >Registarse</button>
          </form>
        </div>
        <!-- END REGISTER TAB -->

        <!-- BEGIN RESET TAB -->
        <div id="reset" name="reset" class="form-action hide">
          <h1 class="form-title">Restablecer Contraseña</h1>
          <div id="resetreplacer">
            <p class="log-paragraph">Acá usted restaurará su contraseña para entrar a la plataforma, utilice el email con el que se registro y su número de ticket provisionado para el evento.</p>
          </div>
          <form class="login-form" id="form_reset" id="form_reset" enctype="multipart/form-data">
              <div class="form-group">
                <input id="resetmail" name="resetmail" class="form-control login-field" type="mail" placeholder="e-Mail" data-rule-required="true" data-msg-required="Introduzca un Email." data-rule-email="true" data-msg-email="Email Inválido. Introduzca uno válido."/>
                <label class="login-field-icon fui-mail" for="resetmail"></label>
              </div>
              <div class="form-group">
                <input id="resetticket" name="resetticket" class="form-control login-field" type="text" maxlength="21" placeholder="# Tiquete" data-rule-required="true" data-msg-required="Introduzca el Tiquete." />
                <label class="login-field-icon fui-document" for="resetticket"></label>
              </div>
              <button type="submit" class="btn btn-danger btn-lg btn-block" id="resetbtn">Restablecer</button>
          </form>
        </div>
        <!-- BEGIN RESET TAB -->

        <!-- BEGIN LOGIN TAB -->
        <div id="ticket" name="ticket" class="form-action hide">
          <h1 class="form-title">Tiquete</h1>
          <p class="log-paragraph">¿No tienes Tiquete? No te preocupes, escanea este QR:</p>
          <div class="row">
            <div class="col-xs-12">
              <a href="<?php echo $phantomeventurl; ?>" target="_blank">
                <img src="<?php echo $phantomqrhref; ?>" class="log-img"/>
              </a>
            </div>
          <div>
        </div>
        <!-- END LOGIN TAB -->
      </div>
      <!-- END ROW -->
    <!-- END CONTENT -->

    <!-- Javascript  -->
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="./javascript/jquery.min.js" type="text/javascript"></script>
    <script src="./javascript/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- Jquery Validator -->
    <script src="./javascript/jquery.validator.js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./javascript/jquery.validator.js/additional-methods.min.js" type="text/javascript"></script>
    <!-- Flatui -->
    <script src="./javascript/flatui.js/flat-ui.js" type="text/javascript"></script>
    <script src="./javascript/flatui.js/application.js" type="text/javascript"></script>
    <!-- Custom Login Functions -->
    <script src="./javascript/logfunct.js" type="text/javascript"></script>
    <script src="./javascript/logval.js" type="text/javascript"></script>
  </body>
</html>
