<?php $apto = json_decode($params, true); ?>

<div class="content_cr">
	<div class="img_edificio">
		<img alt="edificio" src="<?php echo URL.'assets/upload/proyects/'.$apto['imagen']; ?>">
	</div>
	<div class="content_rio">
		
			<?php echo $apto['titulo']; ?>
			<?php echo $apto['descripcion']; ?>

			<p>Últimos apartamentos y locales</p>
			<div class="cuadro">
			<div class="apart">
				<strong>Apartamentos</strong>
				<?php echo $apto['apartamentos']; ?>
			</div>
			<div class="local">
				<strong>Locales</strong>
				<?php echo $apto['locales']; ?>
			</div>
		</div>
	</div>
</div>