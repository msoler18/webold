<!DOCTYPE html>
<html lang="es">

	<head>
	
		<!-- Title -->
		
		<title><?php __title(); ?></title>

		<!-- Metas  -->

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="PROKSOL se especializa en proveer servicios de ingeniería, construcción y gerencia de proyectos a entidades públicas y privadas. " name="description">
		<meta name="author" content="Color al cuadrado"/>
		<meta content="construccion" name="keywords">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
		<meta content="all" name="robots">
		<meta content="servicioalcliente@proksol.com " name="publisher-email">

	   	
	   	<!-- Links -->
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	   	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css"/>
		<link href="<?php echo URL; ?>assets/css/colormin.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>		

		<!-- Scripts -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		
		  


	</head>	

	<body>	

	<header id="header">
		
		<span class="ico_menu open-m"><i class="fa fa-bars"></i></span>		
		<a class="admin_logo" href="<?php echo URL.'admin'; ?>"><img width="100" src="http://coloralcuadrado.com/wp-content/themes/coloralcuadrado/img/azul/logo_color.jpg" /></a>
		
		<?php add_widget('admin_user'); ?>	

	</header>	