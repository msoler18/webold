<!DOCTYPE html>
<html lang="es">

	<head>

		<!-- Title -->
		
		<title>Proksol<?php// __title(); ?></title>

		<!-- Metas  -->

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta name="description" content="Proksol tiene proyectos de inversión y proyectos de vivienda en Bogotá y Santa Marta, Proksol los mejores proyectos inmobiliarios.">
		<meta name="keywords" content="Proksol, Proyectos inmobiliarios, proyectos de vivienda en bogota, proyectos de inversion en santa marta, comprar vivienda en bogota.">
		<meta name="author" content="Color al cuadrado"/>
		<meta content="construccion" name="keywords">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
		<meta content="http://cuberto.com/media/images/logo-for-social.png" property="og:image">
		<meta content="all" name="robots">
		<meta content="servicioalcliente@proksol.com " name="publisher-email">
		<link rel="alternate" hreflang="es" href="http://www.proksol.com/" />
	   	
	   	<!-- Links -->
		<link rel="shortcut icon" type="image/png" href="<?php echo URL; ?>assets/img/img_favicon.ico" />
	   	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css"/>
	

		<link href="<?php echo URL; ?>assets/css/color.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo URL; ?>assets/css/color2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo URL; ?>assets/css/media.css" rel="stylesheet" type="text/css" />

		<!-- Scripts -->

		<!--[if lt IE 9]>
		    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<![endif]-->

	 	<!--[if gte IE 9]><!-->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!--<![endif]-->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		
	</head>	

	<?php 
		$class1 = explode("/", body_class_());
		$class2 = $class1[count($class1) - 1];

		$class_body = body_class_();

		$class_body = substr($class_body, 1); // devuelve "d"
        
       echo "<script> console.log('".$params['id_linea']."'); </script>";
	?>	
	<body class="<?php echo $class_body; ?> <?php echo 'proyect_'.$class2." a".$params['id_linea'];?> ">

		<header>
			
			<div class="clearfix">
				
				<!-- Menu -->

				<nav class="menu_block">
					
					<?php add_widget('menu_top'); ?>	

				</nav>	

			</div>	


		</header>	