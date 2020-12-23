 <?php error_reporting(0); ?>

<!DOCTYPE html> 
<html class="no-js" lang="es">  
<head lang="es">
    <meta charset="UTF-8"> 
    <!-- //responsive: -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Daily Trends Pablo Villalonga</title>
   <!-- icono --> <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <!-- <link rel="icon" href="" type="image/x-icon"> --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/motive.css"> 
</head>

<body class="ct-headroom--fixedMenu">
<div class="ct-preloader"></div>


<!-- INICIO MENU DESPLEGABLE MOVIL -->
    <div class="ct-navbarMobile ct-u-bgBlack">
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar list-unstyled"> 
            <li class="dropdown">
                <a>NOTICIAS</a>
    			<ul class="dropdown-menu" role="menu">

                            <li class="ct-u-backgroundCreme text-uppercase movil"><a style="color:  #a0a0a0 ;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_anadir">Nueva Noticia</a></li> 

                            <li class="ct-u-backgroundCreme text-uppercase movil"><a style="color:  #a0a0a0 ;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_borrar">Borrar noticia</a></li>

                             <li class="ct-u-backgroundCreme text-uppercase movil"><a style="color:  #a0a0a0 ;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_editar">Editar noticia</a></li>  
                </ul>
            </li> 
           
        </ul>
    </div>
<!-- FIN MENU DESPLEGABLE MOVIL -->



<!-- DIV DEL BODY: -->
<div id="ct-js-wrapper">

<!-- ENCABEZADO HEADER-->
<header class="mainHeader">
<h1 class="ct-u-hideText">Daily Trends Pablo Villalonga</h1>



<div class="navbar-header-mobileLogo ct-u-hr-top">
    <a class="navbar-brand" href="index.php"><img src="assets/images/Noticias.png" alt=""> </a>
</div>

<nav class="navbar ct-u-backgroundWhite ct-u-hr-top" role="navigation">

<div class="ct-u-hideText">
    <h2 class="ct-u-hideText">Main Menu</h2>
</div>

<div class="container-fluid navbar-menu">

<div class="navbar-header">
	<a class="navbar-brand" href="index.php"><img src="assets/images/Noticias.png" alt=""></a>
</div>


<div class="collapse navbar-collapse" style="justify-content: space-around;">
<ul class="nav navbar-nav list-unstyled ct-navbar--fadeIn">
<!-- <li>
    <a href="index.php">Inicio</a>   
</li> -->
 
<li class="dropdown bi bi-arrow-down-short">
    <a href="">Noticias</a>
	    <ul class="dropdown-menu">
            <li class="yamm-inner">
                <div class="yamm-content">
                    <div class="row">
                        <section class="col-lg-9 ct-u-paddingTop30">
                        <!-- <div class="col-sm-4 col-md-4 col-lg-4"> -->
                            <ul class="list-unstyled">
								<!-- <li><a style="color:  #a0a0a0 ;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_anadir">Nueva Noticia</a></li> -->
 
                                <li><a class="ct-menu-header-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#popup_anadir">Nueva Noticia</a></li>

                                <li><a class="ct-menu-header-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#popup_borrar">Borrar noticia</a></li>

                                 <li><a class="ct-menu-header-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#popup_editar">Editar noticia</a></li> 
                            </ul>
                        <!-- </div>  -->
                    </section>
                    </div>
                </div>
            </li>
        </ul>
</li> 


</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
</header>
<!--FIN ENCABEZADO HEADER-->
 


<!-- CONTENIDO NOTICIAS -->

<section class="ct-u-backgroundCreme">
<div class="container-large">
<header class="ct-u-hideText">
    <h3 class="ct-u-hideText">Blog</h3>
</header>

<div class="row"> 

    <section class="col-lg-9 ct-u-paddingTop30"> 
 
        <div class="ct-blog-container ct-blog-masonry ct-blog-masonry--col2 ct-gallery"> 

  <?php

        include('assets\simplehtmldom_1_9_1\simple_html_dom.php');

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
                $enlaceFoto='assets/images/no_image.jpg';
            }  
            $titulo_noticias=implode($titulo_noticias);
            
        ?> 
        				<article class="ct-blog-item ct-gallery-item">
                        <div class="ct-u-hideText">
                            <h2 class="ct-u-hideText"></h2>
                        </div>

                        <div class="ct-blog-item-outer"> 	
        					 
        <!-- imagen noticia -->
        					<div class="ct-blog-item-media">
                                <figure class="ct-hover ct-js-hover ct-hover-type14">
                                    <a style="pointer-events: none; cursor: default;" href="<?php echo $enlaceCompleto; ?>"><img src="<?php echo $enlaceFoto; ?>" alt=""/></a>
                                </figure>
                            </div>
        <!-- /////imagen noticia//// -->    

                            <div class="ct-blog-item-wrapper">
                                <div class="ct-blog-item-inner">
                                    <section> 
                                        <!-- titulo noticia -->
                                        <header class="ct-blog-item-header"> 
                                                <a href="<?php echo $enlaceCompleto; ?>"><h3><?php echo $titulo_noticias; ?></h3></a> 
                                           <img src="">
                                        </header> 
                                    </section>
                                </div>
                            </div>
                             
                        </div>
                    </article>

        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
        <?php 
                                        } 
        ?>
			 
           
        </div>
 
        
        <div class="clearfix"></div>
    </section>
  <aside class="col-lg-3">
        <div class="ct-sidebar ct-u-paddingTop60">
            <!-- <header class="ct-u-hideText">
                <h3 class="ct-u-hideText">Sidebar widget</h3>
            </header> -->

            <div class="row">

                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget widget-post">
                        <h4><small class="ct-u-marginBottom30">MIS NOTICIAS</small></h4>

                        <div class="widget-inner">



                             <?php include 'assets/CRUD/mostrar_mis_noticias.php'; ?>                             
                        

                           
                        </div>
                    </div>
                </div>

                

       


<div class="modal fade" id="popup_anadir" tabindex="-1" role="dialog" aria-labelledby="popup_anadirLabel" aria-hidden="true">
  <?php include 'assets/CRUD/Create.php'; ?>
</div> 
<div class="modal fade" id="popup_borrar" tabindex="-1" role="dialog" aria-labelledby="popup_borrarLabel" aria-hidden="true">
  <?php include 'assets/CRUD/Delete.php'; ?> 
</div>


<div class="modal fade" id="popup_editar" tabindex="-1" role="dialog" aria-labelledby="popup_editarLabel" aria-hidden="true">
  <?php include 'assets/CRUD/Update.php'; ?> 
</div>





<!--//popup NUEVA NOTICIA -->

       

                
            </div>
        </div>
    </aside>

</div>
</div>
</section>
<!-- CONTENIDO NOTICIAS -->
  

    <footer class="footer-extended ct-u-paddingTop50">

       
    </footer>


   
</div>



 

<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/dependencies.js"></script>

<!-- <script src="assets/form/js/contact-form.js"></script> -->

<script src="assets/js/ct-mediaSection/jquery.stellar.min.js"></script>

<!-- <script src="assets/less/ButtonComponentMorph/js/mbMorphButton.js"></script> -->

<script src="assets/js/owl.carousel/owl.carousel.min.js"></script>

<script src="assets/js/portfolio/jquery.isotope.min.js"></script>
<script src="assets/js/portfolio/imagesloaded.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/js/less-2.2.0.min.js"></script>
<script type="text/javascript">
  
$('[id^=detalle_]').on('shown.bs.collapse', function() {
  
  
  $('.ct-blog-container').isotope();
}).on('show.bs.collapse', function() {
  
}).on('hidden.bs.collapse', function (){
	
	$('.ct-blog-container').isotope();
}); 

                               
$('.movil').click(function(){
   $('.navbar-toggle').click();
});   

</script>

</body>

</html>