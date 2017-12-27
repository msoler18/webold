<div class="admin">

<h1 class="title"><i class="fa fa-cubes"></i> Lineas</h1>

<a class="add_button" href="<?php echo URL; ?>admin/add_line"><i class="fa fa-plus"></i> Añadir Linea</a>


<?php if($params) : ?>

	<div class="results"></div>

	<div class="table-responsive">

	<table class="table table-striped">
			
		<thead>
				
			<tr>
				
				<th>Nombre linea</th>
				<th></th>
				<th></th>	

			</tr>	


		</thead>	

		<tbody>
			
			<?php  foreach($params as $line) : ?>

				<tr>
						
					<td><?php echo $line['nombre_linea']; ?></td>
					<td><a class="edit" href="<?php echo URL.'admin/update_line/'.$line['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>	
					<td><a class="delete_line delete" href="<?php echo $line['id']; ?>"><i class="fa fa-trash"></i></a></td>
				</tr>

			<?php endforeach; ?>

		</tbody>


	</table>

	</div>

<?php endif; ?>

<script type="text/javascript">
	
	$('.delete_line').click(function(e){

		e.preventDefault();

		var id = $(this).attr('href');
		$(this).parent().parent().remove();

		$.ajax({
			
			url: "<?php echo URL.'admin/delete_line'; ?>",
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