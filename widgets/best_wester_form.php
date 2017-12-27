
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
	<label for="">Subtitulo</label>
	<textarea name="caracteristicas[subtitulo]" placeholder="Titulo" class="ckeditorr"><?php echo (isset($caracteristicas['subtitulo'])) ? $caracteristicas['subtitulo']: ''; ?></textarea>
</div>


<div id="lista_">
	<?php if(isset($caracteristicas['lista'])) : 
		 	foreach($caracteristicas['lista'] as $k => $v) :
	?>

	<div class="list" title="<?php echo $k; ?>">
		<a onclick="remove_type(event, this)" href="#">Remover <i class="fa fa-times"></i></a>
	
		<div class="form-group">
			<label>Lista de caracteristicas</label>
			<textarea class="ckeditorr lista_cara" name="caracteristicas[lista][<?php echo $k; ?>]"><?php echo $v; ?></textarea>
		</div>
	</div>




	<?php endforeach; endif; ?>
</div>	

 <a onclick="add_type(event, this)" class="add_type" href="">Añadir item</a>

<div class="form-group">
	
	<label for="">Imagen</label>


		<?php if(isset($caracteristicas['imagen']) && $caracteristicas['imagen'] != '') : ?>
								
		<input type="hidden" name="caracteristicas[imagen]" value="<?php echo $caracteristicas['imagen'];?>" />
		<img width="400px" class="file_image"  alt="Img" 
		src="<?php echo URL.'assets/upload/proyects/'.$caracteristicas['imagen']; ?> "  />
		<a class="change_bestwester" href="#"><i class="fa fa-pencil-square-o"></i> Editar Foto</a>


		<?php else : ?>

			<img class="file_image"  src="">
			<input onchange="readURL(this,this.previousElementSibling);" name="caracteristicas" type="file" placeholder="Imagen descriptiva">

		<?php endif; ?>




</div>




 <div class="form-group">
	<label for="">Caracteristicas</label>
	<textarea name="caracteristicas[caracteristicas]" placeholder="Titulo" class="ckeditorr"><?php echo (isset($caracteristicas['caracteristicas'])) ? $caracteristicas['caracteristicas']: ''; ?></textarea>
</div>

 <div class="form-group">
	<label for="">Condiciones</label>
	<textarea name="caracteristicas[condiciones]" placeholder="Titulo" class="ckeditorr"><?php echo (isset($caracteristicas['condiciones'])) ? $caracteristicas['condiciones']: ''; ?></textarea>
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

</script>
<script type="text/javascript">
	
	$('.change_bestwester').click(function(e){

		e.preventDefault();

		var title = $(this).attr('title');


		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas[imagen]"  />');	
		$(this).remove();

	});


	function add_type(e, nip) {
		e.preventDefault();


			var counter = $(nip).parent().children('#lista_').children('.list:last-child').attr('title'); 	

					


			if ( isNaN(counter)) {

				counter =  parseInt(counter);								

				counter =   1;

			}else {


				counter =  parseInt(counter);

				
				counter = counter + 1;

			}

			$('#lista_').append('<div class="list" title="'+counter+'">'
			+'<a onclick="remove_type(event, this)" href="#">Remover <i class="fa fa-times"></i></a>'
			
			+'<div class="form-group">'
			+' <label>Lista de caracteristicas</label>'
			+' <textarea class="ckeditorr lista_cara" name="caracteristicas[lista]['+counter+']"></textarea>'
			+'</div>'
			+'</div>');

		tinymce.init({

		    selector: ".ckeditorr",
		
		    plugins: [
		         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		         "save table contextmenu directionality emoticons template paste textcolor"
		   	]
	   
 		});
	}

	function remove_type(e, nip)
	{
		e.preventDefault();
		

		

		$(nip).parent().remove();


		var counter = $('#lista_').children('.list:last-child').attr('title');

		if ( isNaN(counter)) {

			

		}
		else {
			
			var c = 1;

			$.each($('#lista_ .list'), function() {
  				console.log(this);
  				$(this).attr('title', c);
  				$( this ).children('.form-group').children('.lista_cara').attr('name', 'caracteristicas[lista]['+c+']');
  				
  				
  				c++;
			});
		}
	}
</script>

