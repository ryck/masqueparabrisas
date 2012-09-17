<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>masqueparabrisas</title>
	<meta name="description" content="Auto Vidro, empresa con amplia experiencia en el sector, le ofrece todo tipo de cristales para su vehículo, de primeras marcas y con certificado de homologación.">
	<meta name="author" content="http://ryck.me/">
	<meta name="keywords" content="auto vidro, autovidro, vigo, parabrisas, cristales, vehículo, coche, cristales, lunetas, laterales, molduras, grapas, sensores, pegamento, accesorios, coche sustitucion, pontevedra">

	<meta name="viewport" content="width=device-width">
	
	<meta property="og:title" content="masqueparabrisas" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.masqueparabrisas.es/" />
	<meta property="og:image" content="http://www.masqueparabrisas.es/masqueparabrisas-logo-128.png" />

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
          <a class="brand" href="index.php">masqueparabrisas</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Inicio</a></li>
              <li><a href="empresa.php">Empresa</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		<!-- Example row of columns -->
		<div class="row cabecera">
		  <div class="span12" id="slogan">
<!--		  		<h1>auto vidro</h1>-->
		    	<h2><a href="tel://986 413 155">986 413 155</a></h2>
		    	<h3>consultas y pedidos</h3>
		 </div>
		 
		<ul class="social-buttons">
			<li><a href="http://twitter.com/share" class="socialite twitter-share" data-text="masqueparabrisas.es" data-url="http://masqueparabrisas.es" data-count="vertical" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a></li>
			<li><a href="https://plus.google.com/share?url=http://masqueparabrisas.es" class="socialite googleplus-one" data-size="tall" data-href="http://masqueparabrisas.es" rel="nofollow" target="_blank"><span class="vhidden">Share on Google+</span></a></li>
			<li><a href="http://www.facebook.com/sharer.php?u=http://masqueparabrisas.es&amp;t=masqueparabrisas.es" class="socialite facebook-like" data-href="http://masqueparabrisas.es" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a></li>
		</ul>

		</div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div id="hero-search">
			<form class="form-horizontal" id="home-search-form">
              <div class="input-append">
                <input type="text" size="16" id="term" name="term" placeholder="EUROCODE, nombre, medidas, etc..." class=""><button type="button" id="buscar" class="btn btn-large">Buscar</button>
              </div>
              <div class="controles">
	              <label class="radio inline">
	                <input type="radio" value="0" id="radio0" name="filter" checked="true"> Todo
	              </label>
	              <label class="radio inline">
	                <input type="radio" value="1" id="radio1" name="filter"> Parabrisas
	              </label>
	              <label class="radio inline">
	                <input type="radio" value="2" id="radio2" name="filter"> Lunetas
	              </label>
	              <label class="radio inline">
	                <input type="radio" value="3" id="radio3" name="filter"> Laterales
	              </label>
	              <label class="radio inline">
	                <input type="radio" value="4" id="radio4" name="filter"> Molduras, grapas y sensores
	              </label>
	              <label class="radio inline">
	                <input type="radio" value="5" id="radio5" name="filter"> Pegamento y accesorios
	              </label>
            </div>
            <div class="control-buttons">
	            <div class="btn-group" data-toggle="buttons-radio">
							  <button type="button" class="btn" data-filter="0">Todo</button>
							  <button type="button" class="btn" data-filter="1">Parabrisas</button>
							  <button type="button" class="btn" data-filter="2">Lunetas</button>
							  <button type="button" class="btn" data-filter="3">Laterales</button>
							  <button type="button" class="btn" data-filter="4">Molduras, grapas y sensores</button>
							  <button type="button" class="btn" data-filter="5">Pegamento y accesorios</button>
							</div>
						</div>

          	</form>
      </div>
     </div> <!-- /container -->
     
  	<div id="resultados" class="wrapper">
  		<div class="container">
  			<div id="res-items"></div>
  		</div>
  	</div>
   <div class="wrapper" id="services">
   		<div class="container">
     

      <!-- Example row of columns -->
      <div class="row">
		 <div class="span3">
			<h3 class="subcabecera"><i class="icon-info-sign icon-large"></i> auto vidro</h3>
			<p>Auto Vidro, empresa con amplia experiencia en el sector, le ofrece todo tipo de cristales para su vehículo, de primeras marcas y con certificado de homologación.</p>
		 <h3 class="subcabecera"><i class="icon-home icon-large"></i> Dirección</h3>
		 	 	<p>Ctra. Miraflores, 93</p>
		 	 	<p>36214 Vigo</p> 
		 	 	<p>Pontevedra</p>
		 <h3 class="subcabecera"><i class="icon-time icon-large"></i> Horarios</h3>
		 <dl>
		 	<dt>Lunes - Viernes</dt>
		 	<dd>09:00 - 13:30 &mdash; 15:30 - 20:00</dd>
		 	<dt>Sábado</dt>
		 	<dd>10:00 - 14:00</dd>
		 </dl>
		    
		 </div>
		 
		 <div class="span4 seguros">
		  
	 		<h3 class="subcabecera"><i class="icon-road icon-large"></i> Seguros</h3>
	 		<p>Tenemos acuerdos con las príncipales compañías de seguros:</p>
	 		<ul class="lista-seguros clearfix">
		 		<li>Nacional suiza</li>
		 		<li>Allianz</li>
		 		<li>Reale</li>
		 		<li>Groupama</li>
		 		<li>Ges</li>
		 		<li>Catalana Occidente</li>
		 		<li>Helvetia</li>
		 		<li>Patria Hispania</li>
	 		</ul>
	 		<p class="muchas-mas">Y muchas más. Consúltenos sin compromiso.</p>
		 	
		 	<h3 class="subcabecera"><i class="icon-gift icon-large"></i> Ofertas</h3>
		 	<div class="flex-container">
		 	  <div class="flexslider flexslider-ofertas">
		 	    <ul class="slides">
		 	      <li>
		 	        <p>Si necesita un cristal para su autómovil, no dude en llamarnos al 986413155 y le ofreceremos un presupuesto sin compromiso y a su medida.</p>
		 	      </li>
		 	      <li>
		 	        <p>Si necesita coche de sustitución al cambiar su parabrisas, recogemos el suyo y le dejamos el nuestro. Llame para reservar</p>
		 	      </li>
		 	      <li>
		 	        <p>Visite nuestra nave o llámenos para que realicemos el trabajo a domicilio, estamos a su total disposición.</p>
		 	      </li>
		 	    </ul>
		 	  </div>
		 	</div>
		 		
		 </div>
		 
		 <div class="span5">
		 		 	<h3 class="subcabecera"><i class="icon-map-marker icon-large"></i> Situación</h3>
		 
		   <div id="map"></div>
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

<script type="text/javascript">
	// initialize the map on the "map" div
	var map = new L.Map('map');
	
	// create a CloudMade tile layer (or use other provider of your choice)
	var cloudmadeUrl = 'http://{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png',
	    subDomains = ['otile1','otile2','otile3','otile4'],
	    cloudmadeAttrib = 'Data, imagery and map information provided by <a href="http://open.mapquest.co.uk" target="_blank">MapQuest</a>, <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a> and contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/" target="_blank">CC-BY-SA</a>';
	 
	var cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18, attribution: cloudmadeAttrib, subdomains: subDomains});
	
	// add the CloudMade layer to the map set the view to a given center and zoom
	map.addLayer(cloudmade).setView(new L.LatLng(42.21703, -8.71440), 11);
	
	// create a marker in the given location and add it to the map
	var marker = new L.Marker(new L.LatLng(42.21703, -8.71440));
	map.addLayer(marker);
	
	// attach a given HTML content to the marker and immediately open it
	marker.bindPopup("Autovidro<br>Ctra. Miraflores N.93<br>36214 Vigo<br>(Pontevedra)").openPopup();
</script>

<script type="text/javascript">
$(window).load(function() {
  $('.flexslider-ofertas').flexslider({
        animation: "slide",
        controlsContainer: ".flex-container",
        directionNav: false
  });
  
});
</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
