<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="leaflet/leaflet.css" />
	<!--[if lte IE 8]>
	    <link rel="stylesheet" href="leaflet/leaflet.ie.css" />
	<![endif]-->
	
	<script src="leaflet/leaflet.js"></script>
	
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
          <a class="brand" href="#">auto vidro</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="#">Inicio</a></li>
              <li><a href="#about">Empresa</a></li>
              <li class="active"><a href="#contact">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		<!-- Example row of columns -->
		<div class="row">
		
			<div class="span12" id="contact-form">
			
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
			                  <li id="info">Hubo algún problema con el formulario de contacto:</li>
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
			              <form method="post" action="process.php" id="main-contact-form">
			                  <label for="name">Nombre: <span class="required">*</span></label>
			                  <input type="text" id="nombre" name="nombre" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Nombre" required autofocus />
			                  
			                  <label for="email">Correo electrónico: <span class="required">*</span></label>
			                  <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="usuario@dominio.es" required />
			                               
			                  <label for="message">Mensaje: <span class="required">*</span></label>
			                  <textarea id="mensaje" name="mensaje"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
			                  
			                  
			                  <input type="submit" value="Enviar" id="submit" />
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
