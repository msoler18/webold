<div class="admin">

<h1 class="title"><i class="fa fa-building-o"></i> Proyectos</h1>

<a class="add_button" href="<?php echo URL; ?>admin/add_proyect"><i class="fa fa-plus"></i> Añadir Proyecto </a>

<?php if($params) : ?>

	<div class="results"></div>
	
	<div class="table-responsive">

	<table class="table table-striped">
			
		<thead>
				
			<tr>
				<th>Orden</th>
				<th>Nombre del proyecto</th>
				<th>Tipo del proyecto</th>
				<th>Estado del proyecto</th>
				<th>Linea</th>
				<th>Email proyecto</th>	
				<th></th>
				<th></th>
				<th></th>
				<th>Status</th>
			</tr>	

		</thead>	

		<tbody id="sort">

			<?php  $i = 1; foreach($params as $proyect) : ?>

				<tr data-id="<?php echo $proyect['id']; ?>" data-order="">
					<td><?php echo $i; ?></td>	
					<td><?php echo $proyect['nombre_proyecto']; ?></td>
					<td><?php echo $proyect['nombre_tipo']; ?></td>
					<td><?php echo $proyect['estado']; ?></td>
					<td><?php echo $proyect['nombre_linea']; ?></td>
					<td><?php echo $proyect['email']; ?></td>
					<td><a class="edit" href="<?php echo URL.'admin/update_proyect/'.$proyect['id']; ?>"><i class="fa fa-pencil-square-o"></i> </a></td>	
					<td><a class="delete_proyect delete" href="<?php echo $proyect['id']; ?>"><i class="fa fa-trash"></i> </a></td>
					<td><a class="preview_proyect" target="_blank" href="<?php echo URL.'proyecto/'.$proyect['slug']; ?>" ><i class="fa fa-eye"></i> </a></td>
					<td><i class="status fa fa-2x" data-estado="<?php echo $proyect['publicado']; ?>"></i></a></td>
				</tr>

			<?php $i++; endforeach; ?>

		</tbody>
	

	</table>

	<a href="" class="order_proyects btn btn-info">Ordenar</a>



	</div>

<?php endif; ?>

<script type="text/javascript">

//status 
$(document).ready(function (){
    var status = $('.status');
   	  $.each(status, function(key,value){
    	  var estado= $(this).attr("data-estado");
      	   if(estado=='1'){
      	 	   $(this).addClass('check');
      	 	   $(this).addClass('fa-check-circle');

      		}else if(estado=='0'){
      			$(this).addClass('uncheck');
      			 $(this).addClass('fa-clock-o');

            }
       })
})



//orden
$( "#sort" ).sortable({
	stop: function(event, ui){ 
         var i = 1;
         $('#sort tr').each(function() {
              $(this).attr('data-order', i);

             i++;   
        }); 
    }
});


$('.order_proyects').click(function(e){
	e.preventDefault();

	var id = {};

	$('#sort tr').each(function() {
        id[$(this).attr('data-id')] =  $(this).attr('data-order');    

    }); 

	$.ajax({
			
		url: "<?php echo URL.'order_proyects'; ?>",
		cache: false,
		type: 'POST',
		data: {array: id},		
		success: function(html){
		 // $(".results").fadeIn(100, 'fold').html(html);
		 	// window.location.href = '<?php echo URL."admin/proyects"; ?>';
		}
	}); 

});

   //confirmar eliminar
   $(".delete_proyect").click(function(e) {
   	    e.preventDefault();

        var id = $(this).attr('href');
        var content = $(this).parent().parent();

                $.confirm({
                    text: "Está seguro que desea eliminar el proyecto",
                       confirm: function() {
						   content.remove();
	                        $.ajax({
							url: "<?php echo URL.'admin/delete_proyect'; ?>",
							cache: false,
							type: 'POST',
							data: {id: id},		
							success: function(html){
							$(".results").fadeIn(100, 'fold').html(html);
					}
				}); 
                    },
                    cancel: function() {
                        return;
                    }
                });
            });


   //Ajax Eliminar
/*
	$('.delete_proyect').click(function(e){
         
		e.preventDefault();

		var id = $(this).attr('href');
		$(this).parent().parent().remove();

		$.ajax({
			
			url: "<?php echo URL.'admin/delete_proyect'; ?>",
			cache: false,
			type: 'POST',
			data: {id: id},		
			success: function(html){
			$(".results").fadeIn(100, 'fold').html(html);
			}
			}); 

		});*/
	
</script>

</div>