<?php 

	$apto = json_decode($params, true);
 ?>




        <div class="types">
            <div>
                <span>
                    Apartamentos
                </span>
            </div>
      
           

            <?php 

            	foreach($apto['planta'] as $k => $v):
            		
            		$primero = ($k == 1) ? 'tekto' : '';

            		echo ' <div class="text_type_tekto '.$primero.' type'.$k.'">
			                <span>
			                    Tipo <i>'.$k.'</i>
			                </span>
            			</div>';
        		endforeach;

             ?>
            <div>
                <a target="_blank" href="<?php echo URL.'/assets/upload/pdf/'; ?>">
                    <img alt="descargar" src="http://192.168.1.114:8888/proksol/new-site/proksol/assets/upload/img/descragar_catalogo.png">
                </a>
            </div>
        </div>
		

		<?php foreach($apto['planta'] as $k1 => $v2): ?>
	       <div class="type_img type_<?php echo $k1; ?>">
        		<img src="<?php echo URL.'assets/upload/planta/'.$v2['imagen_planta']; ?>">
    		</div>
		<?php endforeach; ?>


		<div class="caract cuatro">
	            <div class="caract_tittle caract1 tekto">
	                <span>
	                    <span>
	                        CARACTERÍSTICAS
	                    </span>
	                    <br>
	                    DEL EDIFICIO
	                </span>
	            </div>
	            <div class="caract_tittle caract2">
	                <span>
	                    <span>
	                        CARACTERÍSTICAS
	                    </span>
	                    <br>
	                    DEL APARTAMENTO
	                </span>
	            </div>
            

            <div class="caracter_content">
                <div class="caract_content caract1_content">
					<?php echo $apto['edificio'] ?>
				</div>


				<div class="caract_content caract2_content">
					

					<?php foreach($apto['planta'] as $k3 => $v3 ): ?>

						<!-- Imagen -->
						<div class="imagen_des">
							<img alt="" src="<?php echo URL.'assets/upload/cara'.$v3['imagen_cara']; ?>">
						</div>

						<!-- Descripcion -->
						<div class="desc_info">
							<?php echo $v3['caracteristicas']; ?>
						</div>
					<?php endforeach; ?>
				
					
					           
				</div>
		</div>

 