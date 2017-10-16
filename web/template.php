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
        <h1>Software Freedom Day (SFD)  2017</h1>
        <h3>Fecha:  7 de octubre del 2017</h3>
        <h3>Lugar: Auditorio de la Universidad Interamericana de Panamá (UIP)</h3>
        <h3>Te invitamos a registrarte para participar de los premios desde <a href="https://www.eventbrite.com/e/software-freedom-day-tickets-38042449992">Eventbrite.</a></h3>
        <h2>Objetivo</h2>
        <p>Promocionar el software libre en la comunidad,
        con fin de lograr que se tenga mayor conocimiento en las
        diferentes áreas y puedan aplicarlo en su vida cotidiana.</p>
        <h1>Planificación</h1>
        <h2>Conferencias</h2>
        <table>
        <thead>
        <tr>
        <th>HORA</th>
        <th>Tema</th>
        <th>Conferencista</th>
        <th>Ubicación</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>09:00 a 09:15</td>
        <td>Bienvenida</td>
        <td>FLOSSPA</td>
        <td></td>
        </tr>
        <tr>
        <td>09:15 a 09:45</td>
        <td>Big Data: Tomar decisiones inteligentes también puede ser Free</td>
        <td><a href="https://pa.linkedin.com/in/cecilio-niño-aa778a39">Cecilio Niño</a></td>
        </tr>
        <tr>
        <td>09:45 a 10:15</td>
        <td>Ingeniería Social con Social-Engineering Toolkit (SET)</td>
        <td><a href="https://github.com/ShaoranD3">Leonardo Esqueda</a></td>
        </tr>
        <tr>
        <td>10:15 a 10:45</td>
        <td>Fintech/Blockchain (Criptomonedas)</td>
        <td>[Felipe Echandi ]()</td>
        </tr>
        <tr>
        <td>10:45 a 11:15</td>
        <td>Mozilla, Firefox y Otras Iniciativas</td>
        <td><a href="https://mozillians.org/es/u/omar.vasquezlima/">Omar Vasquez</a></td>
        </tr>
        <tr>
        <td>11:15 a 11:45</td>
        <td>What is a Data Scientist? Reasons why Fedora is the best OS for Big Data</td>
        <td><a href="https://github.com/yosef7/">José Reyes</a></td>
        </tr>
        <tr>
        <td>11:45 a 12:00</td>
        <td>Mesa Redonda junto a patrocinadores</td>
        <td>[Patrocinadores del SFD]()</td>
        </tr>
        <tr>
        <td>12:45 a 12:30</td>
        <td><strong>Almuerzo (SFD lunch)</strong></td>
        </tr>
        <tr>
        <td>12:30 a 1:00</td>
        <td>Docker y su aplicación en la industria</td>
        <td><a href="http://albertocg.com/">Alberto Castillo</a></td>
        </tr>
        <tr>
        <td>01:00 a 01:30</td>
        <td>Internet of Things: Protocols, Evolution and Why you should care about.</td>
        <td><a href="https://www.kiaranavarro.com/">Kiara Navarro</a></td>
        </tr>
        <tr>
        <td>01:30 a 02:00</td>
        <td>Hablemos de Computación Cuántica</td>
        <td>[Carlos Fernández]()</td>
        </tr>
        <tr>
        <td>02:30 a 03:00</td>
        <td>Diseño Gráfico Open-Source</td>
        <td><a href="http://www.arpiasoftware.com/">Julián Vega</a></td>
        </tr>
        <tr>
        <td>03:00 a 03:30</td>
        <td>Creative Commons (Licenciamiento)</td>
        <td>[Lia Hernández]()</td>
        </tr>
        <tr>
        <td>03:30 a 04:00</td>
        <td>Tokens de Etherum y Smart Contracts (Criptomonedas)</td>
        <td>[Adrian Scott]()</td>
        </tr>
        </tbody>
        </table>
        <h2>Talleres</h2>
        <table>
        <thead>
        <tr>
        <th>HORA</th>
        <th>Tema</th>
        <th>Conferencista</th>
        <th>Ubicación</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>09:00 a 09:30</td>
        <td>Bienvenida</td>
        <td>FLOSSPA</td>
        <td></td>
        </tr>
        <tr>
        <td>09:45 a 10:30</td>
        <td>Gestión de proyectos con Git y GitHub</td>
        <td><a href="https://twitter.com/David25LO?lang=es">David Lopez</a></td>
        </tr>
        <tr>
        <td>10:30 a 11:15</td>
        <td>Producción de audio y video utilizando la suite de Ubuntu Studio</td>
        <td>[Krishna Torres]()</td>
        </tr>
        <tr>
        <td>11:15 a 12:00</td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td>12:00 a 12:30</td>
        <td><strong>Almuerzo (SFD lunch)</strong></td>
        </tr>
        <tr>
        <td>12:30 a 01:15</td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td>01:15 a 02:00</td>
        <td>Infraestrutura Open-Source</td>
        <td><a href="https://pa.linkedin.com/in/oscar-marrugo-ricardo-a558a573">Oscar Marrugo Ricardo</a></td>
        </tr>
        <tr>
        <td>02:00 a 02:45</td>
        <td>Introducción al Web Scraping</td>
        <td><a href="https://github.com/blackfile">Luis Manuel</a></td>
        </tr>
        <tr>
        <td>02:45 a 03:15</td>
        <td>Hagamos un mobile App con NativeScript y Vuejs</td>
        <td><a href="https://twitter.com/zgudino?lang=es">Zahir Gudiño</a></td>
        </tr>
        <tr>
        <td>03:15 a 04:00</td>
        <td>Diseño de personajes con Inkscape</td>
        <td><a href="http://www.arpiasoftware.com/">Julián Vega</a></td>
        </tr>
        </tbody>
        </table>
        <h2>Info</h2>
        <ul>
        <li>
        <h4><a href="/info/whatSFD.md">¿Qué es Software Freedom Day (SFD)?</a></h4>
        </li>
        <li>
        <h4><a href="/info/whatis.md">¿Qué es Software Libre?</a></h4>
        </li>
        </ul>
        <h2>Patrocinadores</h2>
        <p><img src="http://portal.uip.edu.pa/login-cedula/images/logo.png" alt="UIP" /> <img src="http://www.elconix.com/wp-content/uploads/2014/05/logo_elconix.png" alt="Elconix" /> </p>
        <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Fedora_logo_and_wordmark.svg/320px-Fedora_logo_and_wordmark.svg.png" alt="Fedora" />  <img src="https://www.drupal.org/files/Rootstack_0.png" alt="Roostack" /> </p>
        <p><img src="https://tokenmarket.net/blockchain/ethereum/assets/decent-bet/logo_big.png"  width="170"> <img src="http://ehacking.com.bo/wp-content/uploads/2015/05/nlogoEHC.png" alt="Ethical Hacking" /></p>
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
    <script type="text/javascript">
      var states = new Bloodhound
      ({
        datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.word); },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 4,
        local: [
          { word: "Alabama" },
          { word: "Alaska" },
          { word: "Arizona" },
          { word: "Arkansas" },
          { word: "California" },
          { word: "Colorado" }
        ]
      });

      states.initialize();

      $('input.tagsinput').tagsinput();

      $('input.tagsinput-typeahead').tagsinput('input').typeahead(null,
      {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

      $('input.typeahead-only').typeahead(null,
      {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

    </script>
  </body>
</html>
