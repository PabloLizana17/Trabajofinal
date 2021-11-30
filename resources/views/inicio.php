<?php
fopen('AFD_status.txt','a+');
unlink('AFD_status.txt');
fopen('AFD_relleno.txt','a+');
unlink('AFD_relleno.txt');
fopen('AP_status1.txt','a+');
unlink('AP_status1.txt');
fopen('AP_relleno1.txt','a+');
unlink('AP_relleno1.txt');
fopen('AP_status2.txt','a+');
unlink('AP_status2.txt');
fopen('AP_relleno2.txt','a+');
unlink('AP_relleno2.txt');
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">GyL<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.html">Trabajo 1</a></li>
							<li ><a href="portfolio.html">Trabajo 2</a></li>
							<li class="active"><a href="blog.html">Trabajo 3</a></li>
							<li ><a href="about.html">Trabajo 4</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<div id="fh5co-about">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Trabajo 3</h2>
						<div class="subir-archivo-section">
							<div class="descripcion-title">Seleccione el archivo de texto plano</div>
							<div class="archivo-wrap">
							<div class="subir-archivo">
								<p id="mensajes"></p><br>
                    			<textarea id="contenido" cols="30" rows="10"></textarea>
                			</div>
                			<div class="subir-archivo">

                    			<p>&nbsp;<input type="file" id="archivoTexto"><br><br></p>
                    			<p>&nbsp;Este cuadro de texto es solo referencial, servir&aacute para corroborar que la informaci&oacuten ingresada sea efectivamente la que usted ingres&oacute.</p>
                    			<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row animate-box">	
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
					<h3>Demostracion</h3>
					<p align = "justify">Eliga su Opción:</p>
					<p> <a href="afd"><input type="button" value="AFD"></a> o <a href="ap"><input type="button" value="AP"></a> </p>
				<div>
			</div>
		</div>
	</div>
 
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

