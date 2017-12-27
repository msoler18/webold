
<meta name="Title" content="Contáctenos">	
<div class="contactenos clearfix">
	<div>
		<div class="titulo_responsive">
			<div>
				<h1>CONTÁCTENOS</h1>
			</div>
		</div>
		<div class="container">
			<div class="left">
				<h1>CONTÁCTENOS</h1>
				<div class="contact_desc">
					<p>
						Pensando en su bienestar y en que siempre merece una respuesta oportuna, ahora puede comunicarse con nuestra coordinadora de servicio al cliente. <br>
						Consulte con ella todas sus inquietudes.
					</p>
					<span>
						servicioalcliente@proksol.com <br>
						Cel. 310 788 8888 
					</span>
					<p>					
						Además si desea recibir información adicional sobre nuestros productos y servicios, diligencie el siguiente formulario y pronto será contactado 
					</p>
				</div>
			</div>
			<div class="left_responsive">
				<div class="contact_desc">
					<p>
						Pensando en su bienestar y en que siempre merece una respuesta oportuna, ahora puede comunicarse con nuestra coordinadora de servicio al cliente. <br>
						Consulte con ella todas sus inquietudes.
					</p>
					<span>
						servicioalcliente@proksol.com <br>
						Cel. 310 788 8888 
					</span>
					<p>					
						Además si desea recibir información adicional sobre nuestros productos y servicios, diligencie el siguiente formulario y pronto será contactado 
					</p>
				</div>
			</div>
			<div class="right">
				<form action="<?php echo URL.'send_contact' ?>" method="POST">
					<!--<input type="hidden" name="type_form" value="contact_form" />-->
					<div class="form-group">
						<input class="full" type="text" placeholder="Nombre:" name="nombre" required/>
					</div>
					<div class="form-group">
						<input type="number" placeholder="Telefono:" name="telefono" class="inline" required />
						<input type="email" placeholder="Correo electronico:" name="email" class="inline" required />
					</div>
					<div class="form-group">
						<input type="text" name="pais" placeholder="Pais:" class="inline" required />
						<input type="text" name="ciudad_residencia" placeholder="Ciudad:" class="inline" required />
					</div>
					<div class="form-group">
						<textarea name="comentarios" class="full" placeholder="Mensaje:" required></textarea>
					</div>
					<div class="form-group">
						<div class="checkbox_side">
							<input type="checkbox" required />
							<p>Acepto ser contactado/a vía teléfono o
							correo electrónico.
							<a href="<?php echo URL; ?>politicas_privacidad.pdf" target="_blank">Protección de datos personales</a></p>
						</div>

						 <input type="hidden" required name="proyecto_interes"  value="contactenos">
	                     <input type="hidden" required name="proyecto_slug"  value="contactenos">
                    	 <?php $fecha = date("Y-m-d h:i:s");?>
                    	 <input type="hidden" required name="fecha"  value="<?php echo $fecha?>">
						<input type="submit" value="ENVIAR" />
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>