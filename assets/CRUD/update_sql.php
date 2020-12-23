<?php  
require "conexion.php";
 
$titulo_noticia = $_POST["titulo_noticia"];
$url_noticia= $_POST["url_noticia"];
$url_imagen = $_POST["url_imagen"];

$titulo_noticia_edit = $_POST["titulo_noticia_edit"];
$url_noticia_edit = $_POST["link_noticia_edit"];
$url_imagen_edit = $_POST["link_img_edit"];
 
if ($titulo_noticia != "" || $url_noticia != "" || $url_imagen != "" || $titulo_noticia_edit != "" || $url_noticia_edit != "" || $url_imagen_edit != "") {

	 $sql = "UPDATE `noticias` SET `titulo_noticia`='".$titulo_noticia_edit."',`link_noticia`='".$url_noticia_edit."',`link_img`='".$url_imagen_edit."' WHERE `titulo_noticia`= '".$titulo_noticia."' AND `link_noticia`= '".$url_noticia."' AND `link_img`= '".$url_imagen."' ";




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