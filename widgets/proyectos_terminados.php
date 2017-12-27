<?php 

	require_once PATH.'models/proyect.php';

	$tipos = ProyectModel::proyects_off();

	foreach($tipos as $estado) :

		$array['proyectos_ternminados'][] = $estado;
		if(isset($tipos['linea_nombre'])) :
			$logos[$estado['linea_nombre']]   = $estado['linea_logo'];
			$desc[$estado['linea_nombre']]    = $estado['linea_desc'];
		endif;

	endforeach;

	foreach($array as $k => $v) : 
?>
		<div class="proyect_ter">
			<div class="container">
				<div class="titulo">
					<span>
						Proyectos realizados
					</span>
				</div>
				<div class="descripcion">
					<!-- <span>
						Da click en alguno de estos logos y conoce el proyecto	
					</span> -->
				</div>
				<div class="proyect">
					<?php  foreach($v as $item) : ?>
						<a href="<?php echo URL.'proyecto/'.$item['slug'] ?>">
							<img alt="<?php echo $item['nombre_proyecto']; ?>" src="<?php echo URL.'assets/upload/img/'.$item['logo']; ?>" />
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
<?php endforeach; ?>
