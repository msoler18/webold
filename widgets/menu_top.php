
<div id="btn_menu" class="btn_open" style="width:50px; height:50px;">
	<i class="fa fa-bars"></i>
	<i class="fa fa-times"></i>	
</div>

<div class="menu_block">
	<div class="header_menu_responsive">
		<nav class="logo_block">
			<a class="logo "href="<?php echo URL; ?>"><img alt="Logo Proksol" src="<?php echo URL ;?>assets/img/logo.png"></a>
		</nav>
	</div>
	<div class="header_menu">
		<!-- Logo -->
		<nav class="logo_block">
			<a class="logo" href="<?php echo URL; ?>"><img alt="Logo Proksol" src="<?php echo URL ;?>assets/img/logo.png"></a>
			<div class="linea_logo"></div>
		</nav>
		<ul>
			<li>
				<a href="<?php echo URL; ?>nuestros_proyectos">Proyectos</a>
				<span ><i class="fa fa-angle-right"></i></span>
			</li>
			<li><a href="<?php echo URL; ?>quienes_somos">¿Quiénes somos?</a></li>
			<!-- <li><a href="<?php //echo URL; ?>servicios">Servicios</a></li> -->
			<li><a href="<?php echo URL; ?>clientes">Clientes</a></li>
			<li><a href="<?php echo URL; ?>noticias/">Noticias</a></li>
			<li><a href="<?php echo URL; ?>contactenos">Cont&aacute;ctenos</a></li>
			<li class="zona_clientes"><a href="#">ZONA CLIENTES</a></li>
		</ul>
	</div>
</div>

<?php add_widget('login'); ?>	
<script>

	$( document ).ready(function() {

	// Animacion para la abrir y cerrar la zona de clientes
		$(".zona_clientes").click(function() {
			$(".login_zona").animate({
				height: "100%"},
				"fast", function() {
				$(this).children('.login_form').css({
					display: 'block'
				});
			});
		});
		$(".close_login").click(function(e) {
			$(".login_zona").animate({
				height: "0%"},
				"fast", function() {
				$('.login_form').css({
					display: 'none'
				});
			});
		});
	// Fin Animacion para la abrir y cerrar la zona de clientes



	//Animacion Menu Responsive
		$("#btn_menu").click(function() {
           if($(this).hasClass('btn_open') ) {
	            $(this).removeClass('btn_open').addClass('close_menu');
	             $(".fa-bars").animate({
					opacity: 0},
					"fast", function() {
					$(".fa-times").animate({opacity: 1}, "fast");
					$(".fa-bars").css('display','none');
				});
				$(".header_menu").animate({'margin-left': "0"}, "fast");
        	} 

            else {
	            $(this).removeClass('close_menu').addClass('btn_open');
				    $(".fa-times").animate({
					opacity: 0},
					"fast", function() {
					$(".fa-bars").animate({opacity: 1}, "fast");
					$(".fa-bars").css('display', 'block');
			});
			
				$(".header_menu").animate({'margin-left': "-1000"}, "fast");
        	} 
	
		});
	//Fin Animacion Menu Responsive	

	});	

</script>