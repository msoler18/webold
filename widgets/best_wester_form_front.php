<?php $apto = json_decode($params[0], true); ?>

<div class="content_bw">
	<div class="text">
		<div class="text1">
			<?php echo $apto['titulo']; ?>
		</div>

		<div class="text2">
			<?php echo $apto['subtitulo']; ?>
		</div>
	</div>


	<div class="cuadros">

		<?php if(isset($apto['lista'])) : foreach($apto['lista'] as $k1 => $v1): ?>

			<div class="cuadro_<?php echo $k1; ?>">
				<p class="num"><?php echo $k1; ?></p>

				<?php echo $v1 ?>
			</div>

		<?php endforeach; endif; ?>

	</div>

	<div class="cuadro2">
		<div class="gris">
			<div class="imagen">
				<img src="<?php echo URL.'assets/upload/proyects/'.$apto['imagen']; ?>" alt="Grua">
			</div>

		<div class="info">
			<?php echo $apto['caracteristicas']; ?>
		</div>
		</div>

		<div class="negro">
			<div class="titulo">
				<strong class="texto_titulo">Condiciones generales:</strong>
			</div>
			<div class="contenido">
				<?php echo $apto['condiciones']; ?>
			</div>
		</div>
	</div>

	<div class="cuadro3">
	<a target="_blank" href="http://inviertainteligentemente.com/" onclick="ga('send', 'event', 'Best_W', 'Click', 'Invierta_i')" class="invierta"><p>Ingrese a:<br><strong>INVIERTA INTELIGENTEMENTE</strong></p></a>

	<div class="info_invierta">
			<p>y adquiera su <strong>derecho fiduciario</strong> y reciba todos los beneficios de ser parte de<br>
			<strong>Best Western Santa Marta.</strong></p>
		</div>
       <?php 

       if(isset($params[1]) &&  $params[1]!='') : ?>
        <div>
             <a href="<?php echo URL.'assets/upload/pdf/'.$params[1]; ?>" onclick="ga('send', 'event', 'Desc_PDF', 'Click', 'Wester form')" target="_blank">
                <img src="<?php echo URL?>assets/upload/img/descragar_catalogo.png" alt="descargar">
             </a>
       </div>
       <?php endif; ?>

	</div>
</div>