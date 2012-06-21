<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>masqueparabrisas - empresa</title>
	<meta name="description" content="Auto Vidro, empresa con amplia experiencia en el sector, le ofrece todo tipo de cristales para su vehículo, de primeras marcas y con certificado de homologación.">
	<meta name="author" content="http://ryck.me/">
	<meta name="keywords" content="auto vidro, autovidro, vigo, parabrisas, cristales, vehículo, coche, cristales, lunetas, laterales, molduras, grapas, sensores, pegamento, accesorios, coche sustitucion, pontevedra">

	<meta name="viewport" content="width=device-width">
	
	<meta property="og:title" content="masqueparabrisas" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.masqueparabrisas.es/" />
	<meta property="og:image" content="http://www.masqueparabrisas.es/masqueparabrisas-logo-128.png" />
	
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="leaflet/leaflet.css" />
	<!--[if lte IE 8]>
	    <link rel="stylesheet" href="leaflet/leaflet.ie.css" />
	<![endif]-->
		
	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body class="autovidro">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">masqueparabrisas</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.php">Inicio</a></li>
              <li class="active"><a href="empresa.php">Empresa</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		<!-- Example row of columns -->
		<div class="row">
		
		  <div class="span4">
			  <h3 class="subcabecera"><i class="icon-picture icon-large"></i> Instalaciones</h3>
				<div class="flex-container">
				  <div class="flexslider-empresa flexslider">
				    <ul class="slides">
				      <li>
				        <a href="img/nave/NAVE1.jpg" class="fancybox"><img src="img/nave/NAVE1.jpg" /></a>
				      </li>
				      <li>
				        <a href="img/nave/NAVE2.jpg" class="fancybox"><img src="img/nave/NAVE2.jpg" /></a>
				      </li>
				      <li>
				        <a href="img/nave/NAVE3.jpg" class="fancybox"><img src="img/nave/NAVE3.jpg" /></a>
				      </li>
				      <li>
				        <a href="img/nave/NAVE4.jpg" class="fancybox"><img src="img/nave/NAVE4.jpg" /></a>
				      </li>
				      <li>
				        <a href="img/nave/NAVE5.jpg" class="fancybox"><img src="img/nave/NAVE5.jpg" /></a>
<!--				        <div class="flex-caption">
				        	<p>Captions and cupcakes. Winning combination.</p>
				        </div>-->
				      </li>
				    </ul>
				  </div>
				</div>
				
		 </div>
		 
		 <div class="span4">
		 	<h3 class="subcabecera"><i class="icon-cog icon-large"></i> Servicios</h3>
				<ul class="lista-servicios">
					<li>Cristales de ventanas y cristales para turismos, furgonetas</li>
					<li>Reparación de impactos</li>
					<li>Oscurecido de lunas</li>
					<li>Venta de recambios en general</li>
					<li>Mecánica rápida</li>
					<li>Cambio de líquido refrigerante</li>
					<li>Revisión pre-ITV</li>
					<li>Venta de baterías</li>
					<li>Coche de sustitución al cambiar su parabrisas</li>
					<li>Precios competitivos y económicos</li>
					<li>Equipo humano altamente cualificado</li>
					<li>Circuito cerrado de videovigilancia</li>
					<li>Total protección para su vehículo</li>
					<li>Materiales de primeras marcas</li>
					<li>Servicio de urgencias</li>
					<li>Trabajamos con todas las compañías de seguros</li>
					<li>Gran surtido de lunas en stock</li>
					<li>Aparcamiento privado para clientes</li>
		 	</ul>
		 </div>
		 
 		 <div class="span4" id="contact-form">
			 	<h3 class="subcabecera"><i class="icon-envelope icon-large"></i> Contacto</h3>
 				<?php
         //init variables
         $cf = array();
         $sr = false;
 
         if(isset($_SESSION['cf_returndata'])){
 	        $cf = $_SESSION['cf_returndata'];
          	$sr = true;
         }
      	?>
               <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                   <?php 
 	        if(isset($cf['errors']) && count($cf['errors']) > 0) :
 		        foreach($cf['errors'] as $error) :
 	        ?>
                   <li><?php echo $error ?></li>
                   <?php
 		        endforeach;
 	        endif;
 	        ?>
               </ul>
               <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">¡Gracias por ponerse en contacto con nosotros!</p>
               <form method="post" action="process.php" id="main-contact-form" class="form-vertical">
                   <div class="control-group"> 
	                   <label for="name" class="control-label">Nombre: <span class="required">*</span></label>
	                   <input class="span4" type="text" id="nombre" name="nombre" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Nombre" required autofocus />
                   	</div>
                   	<div class="control-group"> 
                   <label class="control-label" for="email">Email: <span class="required">*</span></label>
                   <input class="span4" type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="usuario@dominio.es" required />
                   </div>
                   <div class="control-group">          
                   <label class="control-label" for="message">Mensaje: <span class="required">*</span></label>
                   <textarea class="span4" id="mensaje" name="mensaje"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                   </div>
                   <div class="control-group">                   
	                   <input type="submit" value="Enviar" id="submit" class="btn btn-primary pull-right"/>
	                 </div>
               </form>
               <span id="loading"></span>
               <?php if ($sr) unset($_SESSION['cf_returndata']); ?>
 
 
 		 </div>
		 
		</div>
		
		


    </div> <!-- /container -->
  </div>
  <div class="container">
  	      <hr>
  	
  	      <footer>
  	        <p>&copy; auto vidro <?php echo date('Y'); ?></p>
  	      </footer>
  </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider-empresa').flexslider({
          animation: "slide",
          controlsContainer: ".flex-container",
          directionNav: false
//          before: function(){
//						$('.flex-caption').animate({
//							bottom:-40
//						},100);
//					},
//					after: function(){
//						$('.flex-caption').animate({
//							bottom:0
//						},200);
//
//					},
//					start: function() {
//						$('.flex-caption').animate({
//							bottom:0
//						},200);
//					}
    });
  });
</script>

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
