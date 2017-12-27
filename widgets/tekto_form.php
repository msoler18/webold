
<?php 

	if($_POST['update']):
		require_once PATH.'models/proyect.php';
		$proyect = ProyectModel::find_by_attr(array('id' => $_POST['id']));
		$caracteristicas = json_decode($proyect[0]['caracteristicas'], true);

		// dump($caracteristicas);
		
	endif;
 ?>


 <div id="tipos_apartamentos">
 	<?php if(isset($caracteristicas['planta'])) : 
		  foreach($caracteristicas['planta'] as $k => $v) :
 	?>
		<div class="apto" title="<?php echo $k; ?>">
			<a onclick="remove_type(event, this)" href="#">Remover <i class="fa fa-times"></i></a>
			<div class="form-group">
				<label>Titulo tipo</label> 
			<?php if(isset($caracteristicas['titulo_tipo']) && $caracteristicas['titulo_tipo'] != '') : ?>
				<input class="planta" type="text" name="caracteristicas[titulo_tipo][<?php echo $k; ?>]" value="<?php echo $caracteristicas['titulo_tipo'][$k];?>" />
			<?php else : ?>
				<input name="caracteristicas[titulo_tipo][<?php echo $k ?>]" type="text" >
			<?php endif; ?>
			</div>
			<div class="form-group">
				<label>Imagen planta</label> 


			<?php if(isset($v['imagen_planta']) && $v['imagen_planta'] != '') : ?>
								
				<input class="planta" type="hidden" name="caracteristicas[planta][<?php echo $k; ?>][imagen_planta]" value="<?php echo $v['imagen_planta'];?>" />
				<img width="400px" class="file_image"  alt="Img" 
				src="<?php echo URL.'assets/upload/planta/'.$v['imagen_planta']; ?> "  />
				<a class="change_img_tekto_planta" title="<?php echo $k; ?>" href="#"><i class="fa fa-pencil-square-o"></i> Editar Foto</a>


			<?php else : ?>

				<img class="file_image"  src="">
				<input onchange="readURL(this,this.previousElementSibling);" name="caracteristicas[planta][<?php echo $k ?>]" type="file" placeholder="Imagen descriptiva" class="planta_img">

			<?php endif; ?>

			</div>
			<div class="form-group">
				<label>Imagen Caracteristicas</label>

				<?php if(isset($v['imagen_cara']) && $v['imagen_cara'] != '') : ?>
								
				<input class="foto_cara" type="hidden" name="caracteristicas[planta][<?php echo $k; ?>][imagen_cara]" value="<?php echo $v['imagen_cara'];?>" />
				<img width="400px" class="file_image"  alt="Img" 
				src="<?php echo URL.'assets/upload/cara/'.$v['imagen_cara']; ?> "  />
				<a class="change_img_tekto_cara" title="<?php echo $k; ?>" href="#"><i class="fa fa-pencil-square-o"></i> Editar Foto</a>


				<?php else : ?>

					<img class="file_image"  src="">
					<input onchange="readURL(this,this.previousElementSibling);" name="caracteristicas[cara][<?php echo $k ?>]" type="file" placeholder="Imagen descriptiva" class="foto_cara_img">

				<?php endif; ?>

			</div>
			<div class="form-group">
			 <label>Lista de caracteristicas</label>
			
			 <textarea class="cara cara_planta" 
			 name="caracteristicas[planta][<?php echo $k; ?>][caracteristicas]"><?php echo $v['caracteristicas']; ?></textarea>
			</div>
		</div>	
	<?php endforeach; endif; ?>
 </div>


 <a onclick="add_type(event, this)" class="add_type" href="">Añadir planta</a>
 	
<div class="form-group">
	<label for="">Caracteristicas edificio</label>
	<textarea class="cara" name="caracteristicas[edificio]"><?php echo (isset($caracteristicas['edificio'])) ? $caracteristicas['edificio']: ''; ?></textarea>
</div>

<script type="text/javascript">

	tinymce.init({

	    selector: ".cara",
	
	    plugins: [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
	   ]
	   
 	});

</script>
<script type="text/javascript">

	

 	$('.change_img_tekto_cara').click(function(e){

		e.preventDefault();

		var title = $(this).attr('title');


		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file foto_cara_img" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas[cara]['+title+']"  />');	
		$(this).remove();

	});

	$('.change_img_tekto_planta').click(function(e){

		e.preventDefault();

		var title = $(this).attr('title');


		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file planta_img" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas[planta]['+title+']"  />');	
		$(this).remove();

	});	

	function add_type(e, nip) {
		e.preventDefault();


			var counter = $(nip).parent().children('#tipos_apartamentos').children('.apto:last-child').attr('title'); 	

					


			if ( isNaN(counter)) {

				counter =  parseInt(counter);								

				counter =   1;

			}else {


				counter =  parseInt(counter);

				
				counter = counter + 1;

			}

			$('#tipos_apartamentos').append('<div class="apto" title="'+counter+'">'
			+'<a onclick="remove_type(event, this)" href="#">Remover <i class="fa fa-times"></i></a>'
			+'<div class="form-group">'
			+'	<label>Titulo tipo</label>' 
			+' <input type="text"  name="caracteristicas[titulo_tipo]['+counter+']" />'
			+'</div>'
			+'<div class="form-group">'
			+'	<label>Imagen planta</label>' 
			+' <input type="file" class="planta_img" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas[planta]['+counter+']" />'
			+'</div>'
			+'<div class="form-group">'
			+'	<label>Imagen Caracteristicas</label>'
			+'  <input type="file" class="foto_cara_img" accept="image/x-png, image/gif, image/jpeg" name="caracteristicas[cara]['+counter+']" /> '
			+'</div>'
			+'<div class="form-group">'
			+' <label>Lista de caracteristicas</label>'
			+' <textarea class="cara cara_planta" name="caracteristicas[planta]['+counter+'][caracteristicas]"></textarea>'
			+'</div>'
			+'</div>');

		tinymce.init({

		    selector: ".cara",
		
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


		var counter = $('#tipos_apartamentos').children('.apto:last-child').attr('title');

		if ( isNaN(counter)) {

			

		}
		else {
			
			var c = 1;

			$.each($('#tipos_apartamentos .apto'), function() {
  				console.log(this);
  				$(this).attr('title', c);
  				
  				

  				if($( this ).children('.form-group').children('.planta').length > 0)
  				{
  					$( this ).children('.form-group').children('.planta').attr('name', 'caracteristicas[planta]['+c+'][imagen_planta]');
  				}
  				else {
					$( this ).children('.form-group').children('.planta_img').attr('name', 'caracteristicas[planta]['+c+']');
  					
  				}



  				if ($( this ).children('.form-group').children('.foto_cara').length > 0){
				  	$( this ).children('.form-group').children('.foto_cara').attr('name', 'caracteristicas[cara]['+c+'][imagen_cara]');
				}
				else {
					$( this ).children('.form-group').children('.foto_cara_img').attr('name', 'caracteristicas[cara]['+c+']');
				}
  				
  			
  				$( this ).children('.form-group').children('.cara_planta').attr('name', 'caracteristicas[planta]['+c+'][caracteristicas]');
  				
  				c++;
			});
		}
	}
	
</script>	