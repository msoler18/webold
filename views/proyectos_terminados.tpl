<?php 


	foreach($params as $estado) :

		$array['proyectos_ternminados'][] = $estado;
		if(isset($params['linea_nombre'])) :
			$logos[$estado['linea_nombre']]   = $estado['linea_logo'];
			$desc[$estado['linea_nombre']]    = $estado['linea_desc'];
		endif;

	endforeach;


?>
<div class="proyectos_head">

	<div class="container">

		<h1 class="title">
			<p>
				Nuestros
			</p>
			PROYECTOS
		</h1>
		<p class="proyectos_description">

			En Proksol desarrollamos varios proyectos de diseño y construcción para
			diferentes sectores cumpliendo siempre con el tiempo, presupuesto y
			calidad que ellos requieren.

		</p>

	</div>

</div>

<?php foreach($array as $k => $v) : ?>


		<div class="sin_linea projects_content all_projects_city">
			<div class="container">
				<div class="tittle_ciudad">
					<span>
						Proyectos Terminados
					</span>
				</div>
				<div class="items">
					<?php  foreach($v as $item) : ?>
								<div class="item">
									<img alt="<?php echo $item['nombre_proyecto']; ?>" src="<?php echo URL.'assets/upload/img/'.$item['teaser']; ?>" />
									<div class="bottom">
										<?php $first = strtok($item['nombre_proyecto'], " "); ?>
										<span> <?php echo $first; ?>
										<br>
										<b><?php echo str_replace($first, '', $item['nombre_proyecto']); ?></b></span>
										<a href="<?php echo URL.'proyecto/id/'.$item['id'] ?>">
											<div class="proyect_link">
												Ver
												proyecto
											</div>
										</a>
									</div>
								</div>
						<?php endforeach; ?>
				</div>
			</div>

		</div>

<?php endforeach; ?>