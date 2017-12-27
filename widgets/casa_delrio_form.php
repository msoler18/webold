<?php 

	if($_POST['update']):
		require_once PATH.'models/proyect.php';
		$proyect = ProyectModel::find_by_attr(array('id' => $_POST['id']));
		$caracteristicas = json_decode($proyect[0]['caracteristicas'], true);

		// dump($caracteristicas);
		
	endif;
 ?>


 <div class="form-group">
	<label for="">Titulo</label>
	<textarea name="caracteristicas[titulo]" placeholder="Titulo" class="ckeditorr"><?php echo (isset($caracteristicas['titulo'])) ? $caracteristicas['titulo']: ''; ?></textarea>
</div>



 <div class="form-group">
	<label for="">Descripcion</label>
	<textarea name="caracteristicas[descripcion]" placeholder="Descripcion" class="ckeditorr"><?php echo (isset($caracteristicas['descripcion'])) ? $caracteristicas['descripcion']: ''; ?></textarea>
</div>

 <div class="form-group">
	<label for="">Apartamentos</label>
	<textarea name="caracteristicas[apartamentos]" placeholder="Apartamentos" class="ckeditorr"><?php echo (isset($caracteristicas['apartamentos'])) ? $caracteristicas['apartamentos']: ''; ?></textarea>
</div>


 <div class="form-group">
	<label for="">Locales</label>
	<textarea name="caracteristicas[locales]" placeholder="Apartamentos" class="ckeditorr"><?php echo (isset($caracteristicas['locales'])) ? $caracteristicas['locales']: ''; ?></textarea>
</div>


<div class="form-group">
	
	<label for="">Imagen</label>


		<?php if(isset($caracteristicas['imagen']) && $caracteristicas['imagen'] != '') : ?>
								
		<input type="hidden" name="caracteristicas[imagen]" value="<?php echo $caracteristicas['imagen'];?>" />
		<img width="400px" class="file_image"  alt="Img" 
		src="<?php echo URL.'assets/upload/proyects/'.$caracteristicas['imagen']; ?> "  />
		<a class="change_img_casadelrio" href="#"><i class="fa fa-pencil-square-o"></i> Editar Foto</a>


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

 	$('.change_img_casadelrio').click(function(e){

		e.preventDefault();

		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas"  />');	
		$(this).remove();

	});	


</script>