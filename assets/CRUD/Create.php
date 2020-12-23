<?php 

echo '<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_anadirLabel">Nueva Noticia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <form action="assets/CRUD/Create.php" method="POST">

          <div class="form-group">
            <label for="titulo_noticia">Título Noticia</label>
            <input name="titulo_noticia" type="text" class="form-control" id="titulo_noticia" placeholder="Título Noticia" required> 
          </div>

          <div class="form-group">
            <label for="url_noticia">Enlace Noticia</label>
            <input name="url_noticia" type="url" class="form-control" id="url_noticia" placeholder="URL Noticia" required> 
            <!-- <input type="url" id="homepage" name="homepage"> -->
          </div>

          <div class="form-group">
            <label for="url_imagen">URL Imagen</label>
            <input name="url_imagen" type="url" class="form-control" id="url_imagen" placeholder="URL Imagen" required> 
          </div>

           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>

          </form> 
      </div> 
    </div>
  </div>';




	
require "conexion.php";
 



$titulo_noticia = $_POST["titulo_noticia"];
$url_noticia= $_POST["url_noticia"];
$url_imagen = $_POST["url_imagen"];
 
if ($titulo_noticia != "" || $url_noticia != "" || $url_imagen != "") {

	 $sql = " INSERT INTO `noticias`(`titulo_noticia`, `link_noticia`, `link_img`) VALUES ('".$titulo_noticia."','".$url_noticia."','".$url_imagen."')"; 

	 $resultado = $mysql->query($sql);

	 if ($resultado) {
	 	printf('OK!!!');
	 	// sleep(5);
	 }else{
	 	printf(" ERROR");
	 	printf(" <br>");
	 	printf(" $RESULTADO=   ".$resultado);
	 }
 }

 header("Location: ../../index.php");

 ?>