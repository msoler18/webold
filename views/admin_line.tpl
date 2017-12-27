<script type="text/javascript" src="<?php echo URL.'libs/tiny/tinymce.min.js'?>"></script>
<script type="text/javascript">

	tinymce.init({

	    selector: "textarea",
	
	    plugins: [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
	   ]
	   
 	}); 	

</script>


<div class="admin">
		
<h1 class="title"><i class="fa fa-cubes"></i> Añadir Linea</h1>

<form enctype="multipart/form-data" action="<?php  if(isset($params['action'])) :  echo $params['action']; unset($params['action']); else : echo URL.'admin/insert_line'; endif; ?>" method="POST">
	
	<?php echo isset($params['id']) ? '<input type="hidden" name="id" value="'.$params['id'].'"/>'  : ''; ?>


	<div class="form-group full">
		
		<label>Nombre Linea</label>
		<input value="<?php echo isset($params['nombre_linea']) ? $params['nombre_linea'] : ''; ?>" type="text" placeholder="Nombre Linea" name="nombre_linea" required />
		

	</div>

	<div class="form-group file_group full">
		
		<?php if(isset($params['logo']) &&  $params['logo'] != '') : ?>
			
			<input type="hidden" name="logo" value="<?php echo $params['logo'];?>" />
			<label>Logo</label>
			<img class="file_image" style="width:auto !important;" height="200" alt="Logo Line" src="<?php echo URL.'assets/upload/img/'.$params['logo']; ?> "  />
			<a class="change_logo" href="#"><i class="fa fa-pencil-square-o"></i> Editar Logo</a>

		<?php else : ?>

			<label>Logo</label>

			<img class="file_image" src="#"  />
			<input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="logo"  />

		<?php endif; ?>


	</div>

	<!-- Descripcion Linea -->

	<div class="form-group">
		
		<label>Descripcion</label>
		<textarea name="linea_desc"><?php echo isset($params['linea_desc']) ? $params['linea_desc'] : ''; ?></textarea>

	</div>


	<div class="form_group">
		
		<input type="submit" value="Enviar" />

	</div>


</form>
</div>	
<script type="text/javascript">
	


	$('.change_logo').click(function(e){

		e.preventDefault();

		$(this).parent().children('input[type="hidden"]').remove();
		$(this).parent().append('<input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="logo"  />');	


	});


	$('.file').change(function(){

		var rut = $(this).parent().children('img');		

		readURL(this, rut);	


	});


	function readURL(input, rut) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                	

                $(rut)
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
        }

</script>