<?php  
	
	/*---------------------------------------------------------------------\
	* Configuracion de las constantes basicas de acceso al servidor			|
	* Configuracion del controlador por defecto de el mvc asi como 			|
	*  metodo que se ejecutara al no haber parametro de method en el 		|
	* Request 																|
	----------------------------------------------------------------------*/
	define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/mvc/");
	define("DEFAULT_CONTROLLER", "home");
	define("DEFAULT_METHOD", "index");
	define("DEFAULT_LAYOUT", "default");
	define("PUBLICO", BASE_URL.'public/');

	define("APP_NAME", "PROJECT");

	/*---------------------------------------------------------------------\
	* Configuracion de las constantes para el acceso a la base de datos    	|
	* Uso de mysql mediante la libreria de mysqli de php 					|
	*----------------------------------------------------------------------*/

	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "root");
	define("DB_NAME", "default");

?>