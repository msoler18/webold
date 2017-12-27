<?php 


	 //var_dump($params);
	$apto = json_decode($params[0], true);

?>

<div class="content_424 clearfix">
	<div class="img_edificio"><img src="<?php echo URL.'assets/upload/proyects/'.$apto['imagen'] ?>" alt="edificio"></div>

<div class="texto_contenido">
	<div class="content1">
	<p class="titulo"><?php echo $apto['titulo']; ?></p>

	<p class="text_content1"><?php echo $apto['subtitulo']; ?></p>
	</div>

	<div class="content2">
			<div class="titulos">
			<div class="caract cuatro">
			<p>Características</p>
			</div>

			<div class="benef">
			<p>Beneficios</p>
			</div>
			</div>

			<div class="content1" style="display: inline-block;">
			<div class="contenido_blanco">
				<!-- <ul>
					<li>
				        <p>Edificio categoria a plus</p>
				    </li>
					<li>
				        <p>Lobby de doble altura</p>
				    </li>
					<li>
				        <p>Auditorio para 100 personas dotado de sistemas de audio y video</p>
				    </li>
					<li>
				        <p>Ascensores de alta velocidad</p>
				    </li>
					<li>
				        <p>Sistema central de enfriamiento de alta eficiencia</p>
				    </li>
					<li>
				        <p>Planta electrica de suplencia total</p>
				    </li>
				</ul> -->
				<?php echo $apto['caracteristicas']; ?>
			</div>

				<div class="contenido_gris">
					<!-- <ul>
						<li>Cada oficina cuenta con modernos sistemas integrados de seguridad y automatización que garantizarán una operación eficiente y segura, en la que aprovechará las actuales tecnologías informáticas y de comunicación.</li>
					</ul>

					<p>Además, tendrá acceso a un moderno auditorio dotado de sistemas de audio y multimedia para que realice eventos y presentaciones.</p>
				 -->
				 	<?php echo $apto['caracteristicas_more']; ?>
				 </div>
			</div>

			<div class="content2" style="display: none;">
			<!-- <ul>
				<li>
				<p>El edificio está ubicado al lado del que será el primer hotel de talla internacional de negocios, el Best Western Plus Santa Marta Bussiness Hotel.</p>
				</li>
				<li>
				<p>Santa Marta es una de las ciudades más competitivas de la costa gracias al apalancamiento que les ha brindado el TLC</p>
				</li>
				<li>
				<p>Las oficinas tienen vista a la bahía más hermoza de América y el muelle de la Marina.</p>
				</li>
				<li>
				<p>El edificio está cerca a uno de los puertos más importantes y activos del país. A sólo 5 días del puerto de Nueva York.</p>
				</li>
				<li>
				<p>La Torre 4.24 es el edificio más moderno de la ciudad, ya que cuenta con la más alta tecnología.</p>
				</li>
			</ul> -->
			<?php echo $apto['beneficios']; ?>
			</div>
		</div>
	</div>
</div>




