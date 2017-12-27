<?php 
	
    //echo '<pre>';
	//print_r($params);
	$ciudad = $params['nombre_ciudad'];
	unset($params['nombre_ciudad']);

	foreach($params as $linea) : 
		$array[$linea['linea_nombre']][] = $linea;
		$logos[$linea['linea_nombre']]   = $linea['linea_logo'];
		$desc[$linea['linea_nombre']]    = $linea['linea_desc'];
	endforeach;
?>

<?php  foreach($array as $k => $v) :?>

	  <?php if($k != 'Sin Linea') :?>

		<div class="linea projects_content">
			<div class="container">
				<div class="tittle_ciudad">
					<div class="vol" style="right:30px; bottom: 70px;">
				        <a class="menu_pro" href="<?php echo URL.'proyectos/vivienda/bogota_dc' ?>">
				            <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
				        </a>
				    </div>
					<span>
						Proyectos<?php echo $ciudad; ?>:
					</span>
					<div class="ciudad">
						<span>
							<?php echo $v[0]['linea_nombre']; ?>
						</span>
					</div>
				</div>
				
				<div class="items">

					<?php foreach($v as $item) : ?>
							<a href="<?php echo URL.'proyecto/'.$item['slug'] ?>">
								<div class="item">
									<div class="over">
										<span>
											VER PROYECTO
										</span>
									</div>
									<img alt="<?php echo $item['nombre_proyecto']; ?>" src="<?php echo URL.'assets/upload/img/'.$item['teaser']; ?>" />
									<div class="bottom">
										<div class="proyect_link">
											<img src="<?php echo URL.'assets/upload/img/'.$item['logo']; ?>" alt="">	
										</div>
									</div>
								</div>
							</a>
					<?php endforeach; ?>

					<div class="item">
						<div class="mas_proyectos">
                            <a href="<?php echo URL.'contactenos'; ?>">
								<img alt="mas proyectos" src="<?php echo URL ?>/assets/img/mas_proyectos.png" />
							</a>
                        </div> 
                   		
					</div>
					
				</div>
			</div>
		</div>

	  <?php else : ?>
		
		<div class="sin_linea projects_content all_projects_city">
			<div class="container">
				<div class="tittle_ciudad">
					<span>
						proyectos de comercio e inversión en:
					</span>
					<div class="ciudad">
						<span>
							<?php echo $ciudad; ?>
						</span>
					</div>
				</div>
				<div class="items">
					<?php  
						
						foreach($v as $item) :
							if ($item['estado'] == "nuevo") {
					?>
								<a href="<?php echo URL.'proyecto/'.$item['slug'] ?>">
									<div class="item">
										<div class="over">
											<span>
												VER PROYECTO
											</span>
										</div>
										<img alt="<?php echo $item['nombre_proyecto']; ?>" src="<?php echo URL.'assets/upload/img/'.$item['teaser']; ?>" />
										<div class="bottom">
											<div class="proyect_link">
												<img src="<?php echo URL.'assets/upload/img/'.$item['logo']; ?>" alt="">	
											</div>
										</div>
									</div>
								</a>
					<?php
							}else{

								}
						endforeach;
					?>
							<div class="item mas_proyectos">
								<a href="<?php echo URL.'contactenos'; ?>">
									<img alt="mas proyectos" src="<?php echo URL ?>/assets/img/mas_proyectos.png" />
								</a>
							</div>
				</div>
			</div>
		</div>
	  <?php endif;  ?>


<?php endforeach; ?>

<?php add_widget('proyectos_terminados'); ?>