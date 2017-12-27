<?php if(isset($_SESSION['user']) && $_SESSION['user']['tipo'] == 'admin') : ?>

<ul>
	

	<li><a href="<?php echo URL; ?>admin"> <i class="fa fa-home"></i>Inicio</a></li>
	<li class="submenu"><a href="#"><i class="fa fa-cubes"></i>Proyectos <i class="fa fa-plus"></i></a> 
		
		<ul>
		
			<li><a href="<?php echo URL; ?>admin/proyects"> Todos los proyectos </a></li>
			<li><a href="<?php echo URL; ?>admin/add_proyect"> Añadir proyecto </a></li>

		</ul>	
	
	</li>
	<!-- <li class="submenu"><a href="#"><i class="fa fa-book"></i>Noticias <i class="fa fa-plus"></i></a>
		
		<ul>
		
			<li><a href="<?php echo URL; ?>admin/news"> Todas las noticias </a></li>
			<li><a href="<?php echo URL; ?>admin/add_new"> Añadir notica </a></li>

		</ul>	


	</li> -->
	<li class="submenu"><a href="#"><i class="fa fa-building-o"></i>Lineas<i class="fa fa-plus"></i></a>

		<ul>
		
			<li><a href="<?php echo URL; ?>admin/lines"> Todas las lineas </a></li>
			<li><a href="<?php echo URL; ?>admin/add_line"> Añadir linea </a></li>

		</ul>	
		

	</li>
	<li class="submenu"><a href="#"><i class="fa fa-cog"></i>Tipos<i class="fa fa-plus"></i></a>


		<ul>
		
			<li><a href="<?php echo URL; ?>admin/types"> Todas los tipos </a></li>
			<li><a href="<?php echo URL; ?>admin/add_type"> Añadir tipo </a></li>

		</ul>


	</li>


</ul>		

<?php endif; ?>
