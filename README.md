# Documentación de la Plataforma

### Licencia :goberserk:
Hola comunidad de FLOSSPA, a pesar de que la firma en muchos documentos tenga "Copyright (c) 2017 Luis Daniel Mora Delgado / Black Bohr | @fobos" la licencia sigue siendo MIT, si hay algun inconveniente por que salga la firma mía o la firma de aquellos que lleguen a Colaborar en la plataforma, no duden en contactarme personalmente, incluso si es el caso de la licencia MIT y cambiarla por otra entonces no hay problema alguno, pero debe entrar en discusión por que al final, esta plataforma se hizo para flosspa.

### Información previa :godmode:
Mucha parte de la documentación interna del codigo puede estar comentada en tercera persona, primera persona y en ingles o español, pero es una forma desorganizada que poseo como programador y todavía debo mejorar.

El tema del template es usando el FLAT UI por designmodo, debe destacar que no es mio en absoluto, pero algunas opciones de color fueron directamente modificadas en el documento _flatui.css_, así que tengan mucho ojo al cambiar los colores de la plataforma, de igual manera si desean hacer cambios, comuniquense conmigo personalmente para explicar paso a paso las hojas de estilo.

También, esta versión seria un _ALPHA release_, y la idea era para que estuviese lista para el __Software Freedom Day 2017__, debido a algunas inconviencias, no fue presentada :cry:

### Requisitos :wolf:
Como requisitos debe usarse

> * PHP 7.x + (algunas funciones del codigo todavia con PHP 5, pero no es recomendado, debido a que puede causar errores y muchas son deprecadas en PHP 7)
> * Servidor APACHE (no he probado en otros para este lanzamiento por el momento)
> * Base de datos MARIADB (aunque gracias a ADODB puede ser compatible con otras bases de datos, pero lea más abajo en la sección de [DB](#base-de-datos-feelsgood) para entender mejor el asunto)

Adicionalmente, aunque lo detesten, usar XAMPP para instalar la plataforma entera no es una mala opción, pero tenga en cuenta los problemas que puede tener XAMPP a diferencia de hacer un servidor propio con PHP, MARIADB y APACHE, la versión que se use de XAMPP debe tener _PHP 7+_.

Nota:
* No utiliza __composer__ ni __PEAR__ para paquetes, son incluidos en la fuente, sin embargo, en un futuro se implementara
* Solo ha sido probado en los siguientes navegadores:
	* Mozilla Firefox 50 +
	* Opera 40 +
	* Google Chrome 40 +
* Debe ser compatible con todos los sitemas operativos y Responsive para los celulares y tabletas.

_Si su navegador es Microsoft Edge, IceWeasel, Midori u otro (aunque estos dos ultimos mencionados sean fork de Firefox), no puedo asegurar que todas las caracteristicas funcionen correctamente debido a que son navegadores que no uso o simplemente no he probado, cualquier bug, informarme seria la mejor solución_.

### Explicación de PHP :hurtrealbad:
No es un uso directo de PHP para hacer la página WEB, como tal, sigo utilizando el esquema del cliente _(CSS, HTML, JS)_ para mostrar la página WEB como tal, si entran en el source, observaran solamente la sección de HTML y arriba ubicado, las funciones usadas en PHP.

Este codigo escrito no tiene ningun Framework conocido (como ejemplo [Symfony](https://symfony.com/), [Laravel](https://laravel.com/) o [CakePHP](https://cakephp.org/)) que aunque se usarlas, prefiero hacer un "framework propio" con dependencias escogidas y muy pocas por el momento, sin embargo posee funciones propias elaboradas por mi, poseen nombres temáticos a monstruos, villanos, etc, debido a que la tematica de la plataforma es PHANTOM PLATFORM, consta que también es una pequeña referencia a PHP en **PH**antom **P**latform, entonces, esas funciones pueden cambiarse el nombre a algo más amigable si es que se desea.

Principalmente su vida cae en dos dependencias, [ADODB](http://adodb.org/dokuwiki/doku.php) y [PHPMailer](https://github.com/PHPMailer/PHPMailer), tiene algunas varatijas adicionales como [PHP Markdown Parsedown](http://parsedown.org/) o [PHP QRcode](https://github.com/codemasher/php-qrcode), hacen tambien algunas funciones pero son en secciones administrativas, no del participante, por lo que, debe tenerse cuidado lo que se desee usar.

Por favor, en el momento no debemos usar un __timeout()__ debido a que la plataforma requiere muchas veces que no se cierre durante inactividad cuando la persona este buscando los huevos de pascua, es casi imposible andar activando a todo rato la sesión y jugar la busqueda de los huevos de pascua cuando se cierra a todo rato, sin embargo, veremos en el [TODO](#tareas-a-realizar-trollface) lo que falta por implementar en el codigo, ya sea PHP o Javascript.

### Base de Datos :feelsgood:
ADOdb es nuestro conector en las bases de datos, por lo que no veran funciones como __mysqli_connect()__ o etc en el codigo de PHP, tiene varias funciones integradas y el interpreta la base de datos que le otorgamos, pero debe tenerse en cuenta que si es para bases de datos SQL solo debe escribirse en lenguaje SQL para hacerlo compatible con todas las posibles (Oracle, MariaDB, Postgres, etc), si es para otras bases de datos como Firebird, Netezza, SAP, Sybase, Visual Foxpro, toca verificar en la pagina de [ADODB](http://adodb.org/dokuwiki/doku.php) su sintaxis. Ahí también se encontrarán los datos de si los drivers son obsoletos, activos, etc.

Lastimosamente bases de datos de otro tipo como MongoDB, o bases de datos NoSQL, no tienen conexión posible con ADOdb, se debería entonces trabajar con otra implementación y otro lenguaje distinto a PHP.

En la fuente se incluira los SQL de la base de datos. Y también uno general para importar. Las tablas tienen relaciones entre ellas, la principal es usuarios, **NO BORRE LA TABLA USUARIOS** :goberserk:, al borrarla, usted habrá borrado todas las demás tablas por que estan relacionadas con esta, y tiene como resticciones que si se borra o actualiza el codigo del usuario, puede borrar todo el contenido de estas, a excepción de los eventos y de los huevos de pascua, sin embargo, quedarían obsoletas.

### Tareas a Realizar :trollface:
- [x] Base de la plataforma
- [x] Registrar usuarios
- [x] Enviar correos
- [x] Clasificar usuarios
- [x] Entrar a la plataforma
- [x] Evitar la entrada del Usuario en dos sesiones distintas
- [x] Recuperar Contraseña
- [x] Varias Validaciones en el Login
- [x] Tablero de Puntuaciones
- [x] Modals
- [ ] Acciones en el Tablero
- [x] Lista de eventos del evento general
- [ ] Información del Evento (debe ser dinámica, dependiendo del evento que se celebre y usando el Markdown parser)
- [ ] Integración con Redes Sociales
- [ ] Personalización del Usuario
- [ ] Dinamismo del footer en el caso de los patrocinadores
- [ ] Opciones del Usuario
- [ ] Cuando se cierre el evento, nadie puede acceder
- [ ] Cuando se cierre el navegador, el usuario debe salir de la sesión, sino provoca el primer gran bug de la plataforma


### Comparación de Versiones :japanese_ogre:
13-Septiembre-2017
\*No disponible por el momento\*
La unica disponible es la versión ALPHA, no lleva número alguno.

### Notas adicionales a contribuidores :rage2:
\*No disponible por el momento\*

### Elaboradores :smile:
* @luismora2297 :rage1:
* @maryito
* @zgudino
* Mas...

Has parte de los colaboradores :stuck_out_tongue:
