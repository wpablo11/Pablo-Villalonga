 <?php

include('..\simplehtmldom_1_9_1\simple_html_dom.php');

$URL = file_get_html('https://elpais.com/'); 

for ($i=0; $i < 5; $i++) {  
    //OBTENGO EL LINK DE LA NOTICIA
    $enlace=$URL->find('h2.c_h',$i)->find('a');
    $enlaceCompleto= "https://elpais.com/".$enlace[0]->href;

    $URL2 = file_get_html($enlaceCompleto);

    $titulo_noticias = $URL2->find('h1.a_t text');

    $enlaceF= $URL2->find('.lead_art img');

    if(isset($enlaceF[0]->src)){
        $enlaceFoto=$enlaceF[0]->src;
    }else{
        $enlaceFoto='../images/no_image.jpg';
    } 

   
        $titulo_noticias=implode($titulo_noticias);
    
 
                echo'<article class="ct-blog-item ct-gallery-item"><div class="ct-u-hideText"><h2 class="ct-u-hideText"></h2></div><div class="ct-blog-item-outer"><div class="ct-blog-item-media"><figure class="ct-hover ct-js-hover ct-hover-type14"><a style="pointer-events: none; cursor: default;" href="'.$enlaceCompleto.'"><img src="'.$enlaceFoto.'" alt=""/></a></figure></div><div class="ct-blog-item-wrapper"><div class="ct-blog-item-inner"><section> <!-- titulo noticia --><header class="ct-blog-item-header"><a href="'.$enlaceCompleto.'"><h3>'.$titulo_noticias.'</h3></a><img src=""></header><!-- titulo noticia --><div class="ct-blog-item-date"><p><!-- 1 --><span><!-- 2 --></span></p></div><div class="ct-blog-item-content"><p><!-- 3 --></p><!-- <span class="collapse" id="detalle"><p>lolk</p></span> --></div><!-- <footer class="ct-blog-item-footer"><ul class="ct-blog-item-comments list-unstyled list-inline"><li><a data-toggle="collapse" data-target="#detalle" href="#detalle" onclick="return false;"><i class="fa fa-file-text"></i> Leer más.</a></li></ul></footer> --></section></div></div></div></article>'
 
 
                                } 
                                ?>