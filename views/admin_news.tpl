<div class="admin">

<h1 class="title"><i class="fa fa-book"></i> Noticias</h1>

<a class="add_button" href="<?php echo URL; ?>admin/add_new"><i class="fa fa-plus"></i> Añadir Noticia</a>


<?php if($params) : ?>

	<div class="results"></div>
	
	<div class="table-responsive">

	<table class="table table-striped">
			
		<thead>
				
			<tr>
				
				<th>Nombre de la noticia</th>
				<th>Tipo de la noticia</th>
				<th>Estado de la noticia</th>
			
				<th></th>
				<th></th>	

			</tr>	


		</thead>	

		<tbody>
			
			<?php  foreach($params as $new) : ?>

				<tr>
						
					<td><?php echo $new['nombre_noticia']; ?></td>
					<td><?php echo $new['fecha']; ?></td>
					<td><?php echo $new['estado']; ?></td>
		
					<td><a class="edit" href="<?php echo URL.'admin/update_new/id/'.$new['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>	
					<td><a class="delete_new delete" href="<?php echo $new['id']; ?>"><i class="fa fa-trash"></i></a></td>
				</tr>

			<?php endforeach; ?>

		</tbody>


	</table>

	</div>

<?php endif; ?>

<script type="text/javascript">
	
	$('.delete_new').click(function(e){

		e.preventDefault();

		var id = $(this).attr('href');
		$(this).parent().parent().remove();

		$.ajax({
			
			url: "<?php echo URL.'admin/delete_new'; ?>",
			cache: false,
			type: 'POST',
			data: {id: id},		
			success: function(html){
			$(".results").fadeIn(100, 'fold').html(html);
			}
			}); 

		});
	

</script>
</div>