<?php 

	$usuario = "root";
	$contrasena = "";
	$servidor = "localhost";
	$basededatos = "DailyTrends";

$mysql = new mysqli($servidor,$usuario,$contrasena,$basededatos);

if($mysql->connect_error){
	die('Error en la conexión' . $mysql->connect_error);
}

// printf('servidor Informacion: %s\n', $mysql->server_info);

 ?>