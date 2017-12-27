<div class="admin">

<h1 class="title"><i class="fa fa-cog"></i> Tipos</h1>

<a class="add_button" href="<?php echo URL; ?>admin/add_type"><i class="fa fa-plus"></i> Añadir Tipo</a>


<?php if($params) : ?>

	<div class="results"></div>
	
	<div class="table-responsive">

	<table class="table table-striped">
			
		<thead>
				
			<tr>
				
				<th>Nombre tipo</th>
				<th></th>
				<th></th>	

			</tr>	


		</thead>	

		<tbody>
			
			<?php  foreach($params as $type) : ?>

				<tr>
						
					<td><?php echo $type['nombre_tipo']; ?></td>
					<td><a class="edit" href="<?php echo URL.'admin/update_type/'.$type['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>	
					<td><a class="delete_type delete" href="<?php echo $type['id']; ?>"><i class="fa fa-trash"></i></a></td>
				</tr>

			<?php endforeach; ?>

		</tbody>


	</table>

	</div>

<?php endif; ?>

<script type="text/javascript">
	
	$('.delete_type').click(function(e){

		e.preventDefault();

		var id = $(this).attr('href');
		$(this).parent().parent().remove();

		$.ajax({
			
			url: "<?php echo URL.'admin/delete_type'; ?>",
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