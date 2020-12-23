<?php  
 	 			require 'conexion.php'; 
				$where = "";
				$sql2 = "SELECT * FROM `noticias`";  
				$resultado2 = $mysql->query($sql2);

			if ($resultado2) { 
				while($row2 = $resultado2->fetch_array(MYSQLI_ASSOC)){
		 			echo'<hr>
		 					<article class="ct-blog-item ct-gallery-item">
				                <div class="ct-u-hideText">
				                    <h2 class="ct-u-hideText"></h2>
				                </div>

				                <div class="ct-blog-item-outer">  
									<div class="ct-blog-item-media">
				                        <figure class="ct-hover ct-js-hover ct-hover-type14">
				                            <a style="pointer-events: none; cursor: default;" href="'.$row2['link_noticia'].'"><img src="'.$row2['link_img'].'" alt=""/></a>
				                        </figure>
				                    </div> 
				                    <div class="ct-blog-item-wrapper">
				                        <div class="ct-blog-item-inner">
				                            <section> 
				                                <!-- titulo noticia -->
				                                <header class="ct-blog-item-header"> 
				                                        <a href="'.$row2['link_noticia'].'"><h3>'.$row2['titulo_noticia'].'</h3></a> 
				                                   <img src="">
				                                </header> 
				                            </section>
				                        </div>
				                    </div>   
				                </div>
				            </article>'; 
				}
			} 

 
?> 
                            
                        
 
  