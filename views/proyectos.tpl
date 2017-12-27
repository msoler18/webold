<?php 
	$ciudades = $params['ciudades']; 
	unset($params['ciudades']);
	foreach($params as  $type) : 
		$types[$type['nombre_tipo']]['logo']   = $type['logo'];
		$types[$type['nombre_tipo']]['ciudad'][] = $type['ciudad'];
	endforeach;
?>
<meta name="Title" content="Nuestros proyectos">
<div class="proyectos_head">
	<div class="container">
		<p>
			NUESTROS
		</p>
		<span>
			PROYECTOS
		</span>
	</div>
</div>
<div class="proyectos_content">
	<select class="responsive_select">
	<pre>
		<?php print_r($types);$i = 1; foreach($types as $k1 => $t1) : ?>
			<option value="<?php echo $i; ?>"><?php echo $k1; ?></option>
		<?php $i++; endforeach; ?>
	</select>
	<?php $j = 1; foreach($types as $k => $t):  ?>
		<div id="tipo_<?php echo $j; ?>" class="tipo">
			<div class="content_tipo" style="background-image:url(<?php echo URL.'assets/upload/img/'.$t['logo'];  ?>)">
				<div style="background-image:url(<?php echo URL.'assets/img/texture_img_proksol.png' ?>)">
					<div class="ciudad_right">
					<?php if($j==1){ ?>
						<span>
							VIVIENDA
						</span>
						<?php }else{ ?>
							<span>
							COMERCIO E INVERSIÓN
						</span>
						<?php } ?>
						<li id="ciudad_esp<?php echo $j; ?>" class="ciudad_esp <?php echo $j; ?>">
							<span>
								Seleccione una ciudad
							</span>
						<?php foreach($t['ciudad'] as $ciudad ) : ?>

							
								<i class="fa fa-sort-desc"></i>
								<a class="nd" href="<?php echo URL.'proyectos/'.url($k).'/'.url($ciudades[$ciudad]); ?>">
									<div id="cuidad_opt<?php echo $j; ?>" class="cuidad_opt <?php echo $j; ?>">
										<span>
											<?php echo $ciudades[$ciudad]; ?>
										</span>
									</div>
								</a>
							
						<?php $j++; endforeach; ?>
						</li>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<script language="javascript">
	// $(".ciudad_esp").click(function(e) {
	// 	console.log($(this).children('a'));
	// 	var a = $(this).children('a');
		
	// 	if(!a.is(':visible')){
	// 		// $(a).fadeIn('slow');
 //            $(a).show('slow');
	// 	}
 //        else{
 //        	//$(a).fadeOut('slow');

 //            $(a).hide('slow');
 //        }
	// });

	$('.ciudad_esp').click(function(){
		$(this).children('a').slideToggle(100);
	});
</script>