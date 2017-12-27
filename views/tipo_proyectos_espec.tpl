<?php
	$ciudad = $params['nombre_ciudad'];
	$ciudades = $params['ciudades'];
	unset($params['nombre_ciudad']);
	unset($params['ciudades']);
	$lineas = $params;
	$old_city = strtoupper($ciudad);
 ?>

<meta name="Title" content="Nuestros proyectos">
<div class="proyectos_vivienda">
	<div class="container">
		<div class="vol" style="right:30px; bottom: 50px;">
	        <a class="menu_pro" href="<?php echo URL.'nuestros_proyectos' ?>">
	            <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
	        </a>
	    </div>
		<span>
			proyectos de vivienda en:
		</span>
		<div class="tittle_ciudad">
			<span>
				<?php
					// $city = explode("_",$old_city);
					// $ciudad_con = $city[0];
					// if ($ciudad_con == "BOGOTA") {
					// 	$ciudad_con = "BOGOTÁ";
					// }
					// echo $ciudad_con;
					
					echo $ciudades[$ciudad];
				?>
			</span>
		</div>
	</div>
</div>

<?php
	$cont = 0;
	$cuenta = count($lineas);
	

	

	echo '<div class="all_projects_city">
			<div class="container">';

	foreach($lineas as $k => $v) :
		$cont ++;
?>
		
		
				<!-- <div class="cuadro_linea"> -->
					<div class="imagen_linea">
						<a href="<?php echo URL.'proyectos_por_linea/'.$v['slug'].'/'.url($ciudades[$ciudad]); ?>">
							<div class="over">
								<span>
									VER PROYECTOS
								</span>
							</div>
							<img alt="<?php echo $k ?>" src="<?php echo URL.'assets/upload/img/'.$v['logo']; ?>">
						</a>
					</div>
					<?php
						if ($cuenta == $cont) {
					?>
					<?php
						}
					?>
				<!-- </div> -->
		
<?php endforeach; ?>

			<!-- <div class="cuadro_linea"> -->
				<div class="imagen_linea">
					<a href="<?php echo URL.'contactenos'; ?>">
						<img alt="mas proyectos" src="<?php echo URL ?>/assets/img/mas_proyectos.png" />
					</a>
				</div>
			<!-- </div> -->
		</div>
	</div>



<?php add_widget('proyectos_terminados'); ?>