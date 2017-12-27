
<?php 

	if($_POST['update']):
		require_once PATH.'models/proyect.php';
		$proyect = ProyectModel::find_by_attr(array('id' => $_POST['id']));
		$caracteristicas = json_decode($proyect[0]['caracteristicas'], true);

		
		
		endif;
 ?>

<div class="form-group">
	<label for="">Titulo descripcion</label>
	<input value="<?php echo (isset($caracteristicas['titulo'])) ? $caracteristicas['titulo']: ''; ?>" type="text" name="caracteristicas[titulo]" class="form-control"/>
</div>


<div class="form-group">
	<label for="">Subtitulo</label>
	<input type="text" name="caracteristicas[subtitulo]" class="form-control" value="<?php echo (isset($caracteristicas['subtitulo'])) ? $caracteristicas['subtitulo']: ''; ?>" />
</div>


<div class="form-group">
	<label for="">Caracteristicas</label>
	<textarea name="caracteristicas[caracteristicas]" placeholder="Caracteristicas" class="ckeditorr"><?php echo (isset($caracteristicas['caracteristicas'])) ? $caracteristicas['caracteristicas']: ''; ?></textarea>
</div>

<div class="form-group">
	<label for="">Caracteristicas adicionales</label>
	<textarea name="caracteristicas[caracteristicas_more]" placeholder="Caracteristicas" class="ckeditorr"><?php echo (isset($caracteristicas['caracteristicas_more'])) ? $caracteristicas['caracteristicas_more']: ''; ?></textarea>
</div>


<div class="form-group">
	<label for="">Beneficios</label>
	<textarea name="caracteristicas[beneficios]" placeholder="Beneficios" class="ckeditorr"><?php echo (isset($caracteristicas['beneficios'])) ? $caracteristicas['beneficios']: ''; ?></textarea>
</div>


<div class="form-group">
	
	<label for="">Imagen</label>


		<?php if(isset($caracteristicas['imagen']) && $caracteristicas['imagen'] != '') : ?>
								
		<input type="hidden" name="caracteristicas[imagen]" value="<?php echo $caracteristicas['imagen'];?>" />
		<img width="400px" class="file_image"  alt="Img" 
		src="<?php echo URL.'assets/upload/proyects/'.$caracteristicas['imagen']; ?> "  />
		<a class="change_img_424" href="#"><i class="fa fa-pencil-square-o"></i> Editar Foto</a>


		<?php else : ?>

			<img class="file_image"  src="">
			<input onchange="readURL(this,this.previousElementSibling);" name="caracteristicas" type="file" placeholder="Imagen descriptiva">

		<?php endif; ?>




</div>


<script type="text/javascript">

	tinymce.init({

	    selector: ".ckeditorr",
	
	    plugins: [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
	   ]
	   
 	});

 	$('.change_img_424').click(function(e){

		e.preventDefault();

		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas"  />');	
		$(this).remove();

	});	


</script>


