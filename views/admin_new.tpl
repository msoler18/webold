
<?php 

	$estados = array('activo' => 'Activo', 'inactivo' => 'Inactivo');

 ?>
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
	
<h1 class="title"><i class="fa fa-book"></i>Añadir Noticia</h1>

<form action="<?php  if(isset($params['action'])) :  echo $params['action']; unset($params['action']); else : echo URL.'admin/insert_new'; endif; ?>" method="POST">
	
	<?php echo isset($params['id']) ? '<input type="hidden" name="id" value="'.$params['id'].'"/>'  : ''; ?>


	<div class="form-group full">
		
		<label>Nombre Noticia</label>
		<input value="<?php echo isset($params['nombre_noticia']) ? $params['nombre_noticia'] : ''; ?>" type="text" placeholder="Nombre Noticia" name="nombre_noticia" required />
		

	</div>

	
	

	<div class="form-group full">
		
		<label>Estado</label>

		<select name="estado" required>
				
			<?php 

				foreach($estados as $k => $v ) : 

				if(isset($params['estado']) && $k == $params['estado'] ) :

					$selected = 'selected';
				
				else :

					$selected = '';

				endif;	
		

				echo '<option '.$selected.' value="'.$k.'">'.$v.'</option>';
			
		 		endforeach; 

	 		?>
			
		</select>

	</div>

	

	<div class="form-group">
		
	
		<textarea name="desc_noticia" placeholder="Descripcion Noticia"><?php echo isset($params['desc_noticia']) ? $params['desc_noticia'] : ''; ?></textarea>	

	</div>


	<div class="form_group">
		
		<input type="submit" value="Enviar" />

	</div>


</form>
</div>	