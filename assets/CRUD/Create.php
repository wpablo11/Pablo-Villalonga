<?php 
	
require "conexion.php";
 



$titulo_noticia = $_POST["titulo_noticia"];
$url_noticia= $_POST["url_noticia"];
$url_imagen = $_POST["url_imagen"];
 

 $sql = " INSERT INTO `noticias`(`titulo_noticia`, `link_noticia`, `link_img`) VALUES ('".$titulo_noticia."','".$url_noticia."','".$url_imagen."')";








 $resultado = $mysql->query($sql);

 if ($resultado) {
 	printf('EXITO!!!');
 }else{
 	printf(" MAAAAl");
 	printf(" <br>");
 	printf(" $RESULTADO=   ".$resultado);
 }

 ?>