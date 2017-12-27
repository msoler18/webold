<?php

	require_once PATH.'controllers/proyect.php';

	$proyects = new Proyect;

	$proyects = $proyects->widget_menu_proyects($params);

	$logo = $proyects[0]["logo"];

?>
	<div class="menu_proyects_square">
		<div class="logo_menu_proyects">
			<a href="<?php echo URL.'proyectos_por_linea/id_linea/4/city/bogota_dc' ?>">
				<img src="../../assets/img/reg_proy.png">
			</a>
			<br>
		 	<img src="../../assets/upload/img/<?php echo $logo; ?>">
		</div>
<?php 
		foreach ($proyects as $k => $v) {
 ?>

			<div class="content_menu_proyects">
			 	<img src="../../assets/upload/img/<?php echo $proyects[$k]['teaser'] ?>">
			 	<a href="<?php echo URL.'proyecto/id/'.$proyects[$k]["id"]; ?>">
			 		<div class="hover">
			 			<span>
			 				<?php echo $proyects[$k]["nombre_proyecto"]; ?>
			 			</span>
			 		</div>
			 	</a>
			</div>
<?php
		}
?>
	</div>