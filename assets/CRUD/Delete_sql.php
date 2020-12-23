<?php  
require "conexion.php";
 
$titulo_noticia = $_POST["titulo_noticia"];
$url_noticia= $_POST["url_noticia"];
$url_imagen = $_POST["url_imagen"];
 
if ($titulo_noticia != "" || $url_noticia != "" || $url_imagen != "") {

	 $sql = "DELETE FROM `noticias` WHERE `titulo_noticia`= '".$titulo_noticia."' AND `link_noticia`= '".$url_noticia."' AND `link_img`= '".$url_imagen."' ";  

	 $resultado = $mysql->query($sql);

	 if ($resultado) {
	 	printf('OK!!!'); 
	 }else{
	 	printf(" ERROR");
	 	printf(" <br>");
	 	printf(" $RESULTADO=   ".$resultado);
	 }
 }

 header("Location: ../../index.php");

 ?>