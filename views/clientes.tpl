<meta name="Title" content="Clientes">
<meta name="description" content="Clientes como Oxy, United States of America, Policia Nacional, Embajada Británica, Us Army Corps of Engineers, AllianceFracaise. Banco GnbSufameris, Trison Construction Inc, Tigo, Emery Winslow, Fabrica de licores de Antioquia, NAS, Grenway, Petrominerales, Unión Europea, DynCorp, han confiado en nuestro trabajo y hoy tienen espacios de calidad.">
	<div class="cliente_head">
		<div class="container">
			<h1 class="title">
				<p>
					NUESTROS
				</p>
				CLIENTES
			</h1>
			<p class="clientes_description">
				Clientes como Oxy, Embajada de los Estados Unidos de América, Policía Nacional, Embajada Británica, Us Army Corps of Engineers, AllianceFracaise. Banco GnbSudameris, Trison Construction Inc, Tigo, Emery Winslow, Fábrica de licores de Antioquia, NAS, Greenway, Petrominerales, Unión Europea, DynCorp, han confiado en nuestro trabajo y hoy tienen espacios de calidad. 
			</p>
		</div>
	</div>
	<div class="cliente_content">
		<div class="container">
			<?php 
				$clientes = array(
					'Oxy'                => 'greenway.png',
					'Embassy'            => 'oxy.png',
					'Policia'            => 'valfinanzas.png',
					'Embajada Britanica' => 'us_army.png',
					'Us Army Corp'       => 'embajada_britanica.png',
					'Alliance'           => 'licores_antioquia.png',
					'GNB'                => 'tigo.png',
					'Trison'             => 'alliance.png',
					'Tigo'               => 'union_europea.png',
					'Emery'              => 'policia.png',
					'Licores Antioquia'  => 'embassy.png',
					'Nas'                => 'gnb.png',
					'Greenway'           => 'dyncorp.png',
					'Petrominerales'     => 'trison.png',
					'Union Europea'      => 'petrominerales.png',
					'Dyncorp'            => 'emery.png'   
				);

				foreach($clientes as $k => $v) :
					echo '<div class="clie"><div><img alt="'.$k.'" src="'.URL.'assets/img/clientes/'.$v.'" /></div></div>';	
				endforeach;	
			?>
		</div>
	</div>
