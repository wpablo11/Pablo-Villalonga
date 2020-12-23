<?php 
 echo '<div class="" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_borrarLabel">Borrar Noticia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     </div>
      <div class="modal-body"> 
    	<table class="table">
  			<thead class="thead-light">
    			<tr>
      				<th scope="col">#</th>
      				<th scope="col">TITULO NOTICIA</th>
      				<th scope="col">URL NOTICIA</th>
      				<th scope="col">URL IMAGEN</th>
    			</tr>
  			</thead>
  			<tbody>';

 	 			require 'conexion.php'; 
				$where = "";
				$sql2 = "SELECT * FROM `noticias`";  
				$resultado2 = $mysql->query($sql2);

			if ($resultado2) { 
				while($row2 = $resultado2->fetch_array(MYSQLI_ASSOC)){
		 			echo'
							<tr> 
							 <th scope="row">
							 <form action="assets/CRUD/Delete_sql.php" method="POST">
							 <input name="titulo_noticia" type="text" class="form-control no_mostrar" value="'.$row2['titulo_noticia'].'" placeholder="'.$row2['titulo_noticia'].'" required>
							<input name="url_noticia" type="text" class="form-control no_mostrar" value="'.$row2['link_noticia'].'" placeholder="'.$row2['link_noticia'].'" required>
							<input name="url_imagen" type="text" class="form-control no_mostrar" value="'.$row2['link_img'].'" placeholder="'.$row2['link_img'].'" required>
							 <button type="submit">BORRAR</button>
							 </form>
							 </th>
						      <td class="centrado">'.$row2['titulo_noticia'].'</td> 
						      <td class="centrado">'.$row2['link_noticia'].'</td>
						      <td class="centrado">'.$row2['link_img'].'</td>
						    </tr>
						    '; 
				}
			}

 
  echo' </tbody>
		</table>   
  	 </div>
      
    </div>
  </div>';

  



















    






 ?>