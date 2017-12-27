<?php 

	require_once PATH.'models/line.php';


	Class Proyect {

		public static $ciudades = array(


		"Acandí",
		"Acevedo",
		"Aguachica",
		"Aguada",
		"Aguadas",
		"Aguazul",
		"Agustín Codazzi",
		"Algeciras",
		"Almaguer",
		"Almeida",
		"Alpujarra",
		"Altamira",
		"Amagá",
		"Anapoima",
		"Anolaima",
		"Anorí",
		"Anserma",
		"Ansermanuevo",
		"Antioquia",
		"Anzóategui",
		"Apartadó",
		"Apía",
		"Aquitania",
		"Aracataca",
		"Aranzazu",
		"Aratoca",
		"Arauca",
		"Arauquita",
		"Arbeláez",
		"Arboleda (Berruecos)",
		"Arboledas",
		"Arboletes",
		"Arcabuco",
		"Arenal",
		"Armenia",
		"Armero (Guayabal)",
		"Ataco",
		"Atrato (Yuto)",
		"Ayapel",
		"Balboa",
		"Baranoa",
		"Baraya",
		"Barbacoas",
		"Barbosa",
		"Barichara",
		"Barranca de Upía",
		"Barrancabermeja",
		"Barrancas",
		"Barranco de Loba",
		"Barranquilla",
		"Belalcázar",
		"Belén",
		"Beltrán",
		"Berbeo",
		"Bogotá D.C",
		"Bojacá",
		"Bojayá (Bellavista)",
		"Bolívar",
		"Bosconia",
		"Boyacá",
		"Briseño",
		"Bucaramanga",
		"Bucarasica",
		"Buenaventura",
		"Buenavista",
		"Buenos Aires",
		"Buesaco",
		"Buga",
		"Bugalagrande",
		"Buriticá",
		"Busbanzá",
		"Cabrera",
		"Cabuyaro",
		"Cajamarca",
		"Cajibío",
		"Cajicá",
		"Calamar",
		"Calarcá",
		"Caldas",
		"Cali",
		"California",
		"Campoalegre",
		"Campohermoso",
		"Canalete",
		"Candelaria",
		"Cañasgordas",
		"Caparrapí",
		"Capitanejo",
		"Cáqueza",
		"Caracolí",
		"Caramanta",
		"Carcasí",
		"Carepa",
		"Carmen de Apicalá",
		"Carmen de Carupa",
		"Carmen de Viboral",
		"Carolina",
		"Cartagena",
		"Cartagena del Chairá",
		"Cartago",
		"Carurú",
		"Casabianca",
		"Castilla la Nueva",
		"Caucasia",
		"Cerrito",
		"Chameza",
		"Chaparral",
		"Charalá",
		"Charta",
		"Chinavita",
		"Chinchina",
		"Chinú",
		"Chipaque",
		"Chipatá",
		"Chiquinquirá",
		"Chíquiza",
		"Chiriguaná",
		"Chiscas",
		"Chita",
		"Chitagá",
		"Chitaranque",
		"Chivatá",
		"Chivolo",
		"Chivor",
		"Choachí",
		"Chocontá",
		"Cicuto",
		"Ciénaga",
		"Ciénaga de Oro",
		"Coello",
		"Cómbita",
		"Corrales",
		"Cota",
		"Cravo Norte",
		"Cuaspud (Carlosama)",
		"Cúcuta",
		"Dos Quebradas",
		"Duitama",
		"El Carmen",
		"El Carmen de Bolívar",
		"El Castillo",
		"El Cerrito",
		"El Guacamayo",
		"El Guamo",
		"El Litoral de San Juan",
		"El Molino",
		"Envigado",
		"Espinal",
		"Facatativá",
		"Flandes",
		"Florencia",
		"Florida",
		"Floridablanca",
		"Fredonia",
		"Fresno",
		"Funza",
		"Gachantivá",
		"Gachetá",
		"Galán",
		"Garzón",
		"Génova",
		"Gigante",
		"Ginebra",
		"Giraldo",
		"Girardot",
		"Girardota",
		"Girón",
		"Granada",
		"Guaca",
		"Guacamayas",
		"Guaduas",
		"Guamo",
		"Guarandá",
		"Guatavita",
		"Ibagué",
		"Icononzo",
		"Ipiales",
		"Itagüí",
		"Jamundí",
		"La Ceja",
		"Los Córdobas",
		"Los Palmitos",
		"Los Patios",
		"Madrid",
		"Magangue",
		"Maicao",
		"Málaga",
		"Manaure",
		"Manizales",
		"Manzanares",
		"Mapiripán",
		"Mariquita",
		"Medellín",
		"Melgar",
		"Miraflores",
		"Miranda",
		"Mistrató",
		"Mitú",
		"Mocoa",
		"Mompós",
		"Mongua",
		"Montería",
		"Mosquera",
		"Murillo",
		"Murindó",
		"Mutatá",
		"Muzo",
		"Nariño",
		"Natagaima",
		"Neira",
		"Neiva",
		"Nemocón",
		"Nilo",
		"Ocaña",
		"Onzága",
		"Pachavita",
		"Pamplona",
		"Pamplonita",
		"Paz de Ariporo",
		"Paz de Río",
		"Pedraza",
		"Pelaya",
		"Pensilvania",
		"Peñol",
		"Pereira",
		"Pie de Cuesta",
		"Piedras",
		"Popayán",
		"Potosí",
		"Pradera",
		"Prado",
		"Providencia",
		"Publoviejo",
		"Pueblo Bello",
		"Pueblo Nuevo",
		"Pueblo Rico",
		"Pueblorrico",
		"Puente Nacional",
		"Puerres",
		"Puerto Caicedo",
		"Puerto Carreño",
		"Puerto Colombia",
		"Puerto Gaitán",
		"Puerto Leguízamo",
		"Puerto Libertador",
		"Puerto López",
		"Puerto Nare",
		"Puerto Nariño",
		"Quibdó",
		"Ricaurte",
		"Río de Oro",
		"Río Viejo",
		"Rioblanco",
		"Riofrío",
		"Riohacha",
		"Rionegro",
		"Riosucio",
		"Risaralda",
		"Rivera",
		"Roncesvalles",
		"San José del Guaviare",
		"San Luis de Palenque",
		"San Onofre",
		"San Vicente de Chucurí",
		"San Vicente del Caguán",
		"Santa Marta",
		"Santa Rosa",
		"Santa Rosa de Cabal",
		"Sesquilé",
		"Siachoque",
		"Sibate",
		"Silvania",
		"Soacha",
		"Socha",
		"Socorro",
		"Socotá",
		"Sogamoso",
		"Solano",
		"Soledad",
		"Solita",
		"Somondoco",
		"Suárez",
		"Supatá",
	    "Tocaima",
		"Tocancipá",
		"Toguí",
		"Toledo",
		"Tunja",
		"Ubaté",
		"Valledupar",
		"Zipaquirá"


	);

	public static $estados = array('nuevo' => 'Nuevo Proyecto', 'realizado' => 'Proyecto Realizado');

		public static function our_proyects()
		{

			$our_proyects = ProyectModel::our_proyects();
			$our_proyects['ciudades'] = static::$ciudades;

			__view('proyectos:layout', $our_proyects);


		}

		public static function view_proyect($array)
		{

			$profile = 	ProyectModel::find_by_attr(array( 'slug' => $array['slug']));
			$profile = $profile[0];
			if ($profile['estado']=="nuevo") {
				
				$line = LineModel::find_by_attr(array('id' => $profile['id_linea']));

				$slug_linea = $line[0]['slug'];

				return __view('proyecto_'.$slug_linea.':layout', $profile);

				// switch ($profile['id_linea']) {
				// 	case '4':
				// 		return __view('proyecto_tekto:layout', $profile);
				// 		break;
				// 	case '5':
				// 		return __view('proyecto_sin_linea:layout', $profile);
				// 		break;
				// 	default:
				// 		break;
				// }



			}elseif ($profile['estado']=="realizado") {
				return __view('proyecto_terminado:layout', $profile);
			}else{
				echo "Error en la ejecucion, vuelva a intentarlo";
			}

		}

		public static function  proyects_by_line($array)
		{

			foreach(static::$ciudades as $c) :

				$ci[] = url($c);

			endforeach;

			$ciudad= array_search($array['ciudad'], $ci);

			// $proyects = ProyectModel::find_by_attr(array('id_linea' => $array['id_linea'], 'ciudad' => $ciudad));
			$proyects = ProyectModel::proyects_line($array['slug'], $ciudad);

			return __view('tipo_proyectos:layout', $proyects);
		}

		/****** Carga de layout dependiendo de la linea del proyecto *****/
		public static function type_proyect($array)
		{

			if(isset($array['tipo']) && isset($array['ciudad'])) :

				require_once PATH.'models/type.php';

				$tipos = TypeModel::find_all();

				foreach($tipos as $t) :

					$ti[] = url($t['nombre_tipo']);

				endforeach;

				foreach(static::$ciudades as $c) :

					$ci[] = url($c);

				endforeach;

				$ciudad= array_search($array['ciudad'], $ci);
				
				$tipo= array_search($array['tipo'], $ti);
				
				$tipo = $tipos[$tipo];

				$proyects = ProyectModel::linies($tipo['id'],$ciudad);

				foreach($proyects as $pr) :
					// Si no pertenece a ninguna linea carga la vista tipo_proyectos, si tiene linea carga la vista tipo_proyectos_espec
					// echo $pr["nombre_linea"];
					if ($pr["nombre_linea"] == "Sin Linea") {;
						$proyects           = ProyectModel::proyects_type($tipo['id'], $ciudad);
						$proyects['nombre_ciudad'] = static::$ciudades[$ciudad];
				 		return __view('tipo_proyectos:layout', $proyects);
					}else{
						$proyects = ProyectModel::linies($tipo['id'],$ciudad);
						$proyects['nombre_ciudad'] =  $ciudad;
						$proyects['ciudades'] =  static::$ciudades;
						return __view('tipo_proyectos_espec:layout', $proyects);
					}
				endforeach;


				// $proyects = ProyectModel::proyects_type($tipo['id'], $ciudad);

				//  return __view('tipo_proyectos:layout', $proyects);


				else :

				url_redirect(URL.'nuestros_proyectos');

			endif;

		}

		// funcion para cargar todos los proyectos
		public static function proyects_off()
		{

			$proyects_off = ProyectModel::proyects_off();

			return __view('proyectos_terminados:layout', $proyects_off);


		}

		public static function all_proyects()
		{


			$all_proyects = ProyectModel::all_proyects();

			__view('admin_proyects:admin_layout', $all_proyects);


		}

		public static function insert_proyect()
		{


			$Pathimg = PATH.'assets/upload/img/';
			$_POST['caracteristicas'] = self::update_carac($_POST['layout'], $_POST['caracteristicas'], $files_carac);
			
			// Google Maps

			if (isset($_FILES["google_maps"]["name"]) && ($_FILES["google_maps"]["name"] <> '') ) {
				$teaser_google 			= $_FILES["google_maps"]["name"];
				$teaser_googleNameTemp 	= $_FILES["google_maps"]["tmp_name"];
				$teaser_googleNameNew 	= $Pathimg . basename($teaser_google);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_googleNameTemp,$teaser_googleNameNew)) {

					$_POST['google_maps']['logo'] = $teaser_google ;

				}
				else {

					// echo'eeeee';
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}	

			if(isset($_POST['google_maps'])) :

				$_POST['google_maps'] = json_encode($_POST['google_maps']);

			endif;	



			$last  = ProyectModel::last_id();

			$last = $last[0];
		

			$last = (int) $last['id'] + 1;


			// Galeria 


			if (!file_exists(PATH.'assets/upload/gallery/'.$last)) {
    			mkdir(PATH.'assets/upload/gallery/'.$last, 0777, true);
			}


			$Pathgallery = PATH.'assets/upload/gallery/'.$last.'/';

			if (isset($_FILES["galeria"]["name"]) && ($_FILES["galeria"]["name"] <> '') ) :


			$file_count = count($_FILES['galeria']['name']);

	

				for ($i=0; $i < $file_count ; $i++) { 
					

					

					$name = $_FILES['galeria']['name'][$i]; 

					move_uploaded_file($_FILES['galeria']['tmp_name'][$i],  $Pathgallery.$name);

					$images[] = $name; 

				}


				$_POST['galeria'] = json_encode($images);

			endif;	


		
	



	
			// Slide

			if (isset($_FILES["slide_img"]["name"]) && ($_FILES["slide_img"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["slide_img"]["name"];
				$teaser_imgNameTemp 	= $_FILES["slide_img"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['slide_img'] = $teaser_img ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}


			
			// Pdf 


			$Pathpdf = PATH.'assets/upload/pdf/';
			

			if (isset($_FILES["pdf"]["name"]) && ($_FILES["pdf"]["name"] <> '') ) {
				$teaser_pdf 			= $_FILES["pdf"]["name"];
				$teaser_pdfNameTemp 	= $_FILES["pdf"]["tmp_name"];
				$teaser_pdfNameNew 	= $Pathpdf . basename($teaser_pdf);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_pdfNameTemp,$teaser_pdfNameNew)) {
					
					$_POST['pdf'] = $teaser_pdf ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 


		
			// Logo 

			if (isset($_FILES["logo"]["name"]) && ($_FILES["logo"]["name"] <> '') ) {
				$teaser_logo 			= $_FILES["logo"]["name"];
				$teaser_logoNameTemp 	= $_FILES["logo"]["tmp_name"];
				$teaser_logoNameNew 	= $Pathimg . basename($teaser_logo);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_logoNameTemp,$teaser_logoNameNew)) {
					
					$_POST['logo'] = $teaser_logo ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 

			// Teaser 

			if (isset($_FILES["teaser"]["name"]) && ($_FILES["teaser"]["name"] <> '') ) {
				$teaser_teaser 			= $_FILES["teaser"]["name"];
				$teaser_teaserNameTemp 	= $_FILES["teaser"]["tmp_name"];
				$teaser_teaserNameNew 	= $Pathimg . basename($teaser_teaser);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_teaserNameTemp,$teaser_teaserNameNew)) {
					
					$_POST['teaser'] = $teaser_teaser  ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 

			$_POST['slug']	= url($_POST['nombre_proyecto']);


			if(ProyectModel::save($_POST)) :

				$url = URL."admin/proyects";
				url_redirect($url);

			endif;


		}


		public function update_by_proyect()
		{

			$Pathimg = PATH.'assets/upload/img/';


			
			// Google Maps

			if (isset($_FILES["google_maps"]["name"]) && ($_FILES["google_maps"]["name"] <> '') ) {
				$teaser_google 			= $_FILES["google_maps"]["name"];
				$teaser_googleNameTemp 	= $_FILES["google_maps"]["tmp_name"];
				$teaser_googleNameNew 	= $Pathimg . basename($teaser_google);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_googleNameTemp,$teaser_googleNameNew)) {
					
					$_POST['google_maps']['logo'] = $teaser_google ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}	

		

			$_POST['google_maps'] = json_encode($_POST['google_maps']);

				

		

			// Galeria 

			$Pathgallery = PATH.'assets/upload/gallery/'.$_POST['id'].'/';

			if (isset($_FILES["galeria"]["name"]) && ($_FILES["galeria"]["name"] <> '') ) :


			$file_count = count($_FILES['galeria']['name']);

	

				for ($i=0; $i < $file_count ; $i++) { 
					

					

					$name = $_FILES['galeria']['name'][$i]; 

					move_uploaded_file($_FILES['galeria']['tmp_name'][$i],  $Pathgallery.$name);

					$images[] = $name; 

				}


				

			endif;	





			
				if (isset($_POST['galeria']) && isset($_FILES['galeria'])) :
					
					$images = array_merge($_POST['galeria'], $images);
					$_POST['galeria'] = json_encode($images);
					// echo 'tiene las 2';
				
				
				elseif(isset($_POST['galeria']) && !isset($_FILES['galeria'])) : 
			
					$images = $_POST['galeria'];

					$_POST['galeria'] = json_encode($images);
					// echo 'tiene post';


				elseif(!isset($_POST['galeria']) && isset($_FILES['galeria'])) :

					$images = $images;
					$_POST['galeria'] = json_encode($images);
					// echo 'tiene files';

				elseif(!isset($_POST['galeria']) && !isset($_FILES['galeria'])) :

					
					$_POST['galeria'] = '-';	
					// echo 'no tiene nd';

				endif;



			// Planta 



			

			// Slide

			
			if (isset($_FILES["slide_img"]["name"]) && ($_FILES["slide_img"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["slide_img"]["name"];
				$teaser_imgNameTemp 	= $_FILES["slide_img"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['slide_img'] = $teaser_img ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}	

			// Pdf 


			$Pathpdf = PATH.'assets/upload/pdf/';
	
		
			if (isset($_FILES["pdf"]["name"]) && ($_FILES["pdf"]["name"] <> '') ) {
				$teaser_pdf 			= $_FILES["pdf"]["name"];
				$teaser_pdfNameTemp 	= $_FILES["pdf"]["tmp_name"];
				$teaser_pdfNameNew 	= $Pathpdf . basename($teaser_pdf);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_pdfNameTemp,$teaser_pdfNameNew)) {
					
					$_POST['pdf'] = $teaser_pdf ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 

			// Logo 

			if (isset($_FILES["logo"]["name"]) && ($_FILES["logo"]["name"] <> '') ) {
				$teaser_logo 			= $_FILES["logo"]["name"];
				$teaser_logoNameTemp 	= $_FILES["logo"]["tmp_name"];
				$teaser_logoNameNew 	= $Pathimg . basename($teaser_logo);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_logoNameTemp,$teaser_logoNameNew)) {
					
					$_POST['logo'] = $teaser_logo ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}


			// Teaser 

			if (isset($_FILES["teaser"]["name"]) && ($_FILES["teaser"]["name"] <> '') ) {
				$teaser_teaser 			= $_FILES["teaser"]["name"];
				$teaser_teaserNameTemp 	= $_FILES["teaser"]["tmp_name"];
				$teaser_teaserNameNew 	= $Pathimg . basename($teaser_teaser);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_teaserNameTemp,$teaser_teaserNameNew)) {
					
					$_POST['teaser'] = $teaser_teaser ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 


			// dump($_POST);	

			// die();

			$files_carac = (isset($_FILES['caracteristicas'])) ? $_FILES['caracteristicas'] : null;



			$_POST['caracteristicas'] = self::update_carac($_POST['layout'], $_POST['caracteristicas'], $files_carac);


			$_POST['slug']	= url($_POST['nombre_proyecto']);



			if(isset($_POST['id']) && ProyectModel::update($_POST, ' WHERE id = '.$_POST['id'].' ')) :

				$url = URL."admin/proyects";
				url_redirect($url);

			endif;


		}


		public static function add_proyect_form()
		{

			require_once PATH.'models/type.php';
			require_once PATH.'models/line.php';


			$proyect['ciudades'] = static::$ciudades;	
		 	$proyect['estados']  = static::$estados;	
		 	$proyect['tipos']    = TypeModel::find_all();	
		 	$proyect['lineas']   = LineModel::find_all();

		 	__view('admin_proyect:admin_layout', $proyect);
		

		}


		public static function update_proyect($array)
		{

		
			require_once PATH.'models/type.php';
			require_once PATH.'models/line.php';	

			 $proyect = ProyectModel::find_id($array['id']);

			 if($proyect) :
			 	
			 	$proyect = $proyect[0];	
			 	$proyect['action'] = URL.'admin/update_by_proyect';
			 	$proyect['ciudades'] = static::$ciudades;	
			 	$proyect['estados'] = static::$estados;
			 	$proyect['tipos']    = TypeModel::find_all();	
		 		$proyect['lineas']   = LineModel::find_all();	

			 	else :


			 	url_redirect(URL.'admin/proyects');	


			 endif;

			__view('admin_proyect:admin_layout', $proyect);
		
		

		}


		private static function update_carac($layout, $array_carac, $files)
		{

			

			if($files != null) :
				


				switch ($layout) {
					case '424_form':
						$simple = __upload_file(PATH.'assets/upload/proyects/', $files, PATH.'assets/upload/proyects/tmp/');
						if ($simple != null): $array_carac['imagen'] = $simple; endif;
						$array_carac['caracteristicas'] = special_characters($array_carac['caracteristicas']);
							
					break;

					case 'casa_delrio_form':	

						$simple = __upload_file(PATH.'assets/upload/proyects/', $files, PATH.'assets/upload/proyects/tmp/');
						if ($simple != null): $array_carac['imagen'] = $simple; endif;
						// $array_carac['caracteristicas'] = special_characters($array_carac['caracteristicas']);

					break;

					case 'best_wester_form':	

						$simple = __upload_file(PATH.'assets/upload/proyects/', $files, PATH.'assets/upload/proyects/tmp/');
						if ($simple != null): $array_carac['imagen'] = $simple; endif;
						// $array_carac['caracteristicas'] = special_characters($array_carac['caracteristicas']);

					break;

					case 'tekto_form' :
						
							
						

							$si_hay_img_planta = function() use ($array_carac) {

								foreach($array_carac['planta'] as $k4 => $v4):
										
										if(isset($array_carac['planta'][$k4]['imagen_planta'])) :
											return true;
										endif;
										

								endforeach;
								
								return false;	

							};


							$si_hay_img_cara = function() use ($array_carac) {

								foreach($array_carac['planta'] as $k4 => $v4):
										
										if(isset($array_carac['planta'][$k4]['imagen_cara'])) :
											return true;
										endif;
										

								endforeach;
								
								return false;	

							};

			




						//  si hay archivos y y post

						if($si_hay_img_planta() or $si_hay_img_cara()) :


							$planta = (isset($files['name']['planta'])) ? files_multidimensional(PATH.'assets/upload/planta/', $files, PATH.'assets/upload/planta/tmp/' , 'planta') : null;
							$cara = (isset($files['name']['cara'])) ? files_multidimensional(PATH.'assets/upload/cara/', $files, PATH.'assets/upload/cara/tmp/' , 'cara') : null;
						
						


							foreach($array_carac['planta'] as $k3 => $v3):
								
						
								if(!is_null($planta) && array_key_exists($k3, $planta)):

									$array_carac['planta'][$k3]['imagen_planta'] = $planta[$k3];
									
								endif;

								if(!is_null($cara) && array_key_exists($k3, $cara)):

									$array_carac['planta'][$k3]['imagen_cara'] = $cara[$k3];
									
								endif;

								$array_carac['planta'][$k3]['caracteristicas'] = str_replace("\r\n", "",$array_carac['planta'][$k3]['caracteristicas']);

							endforeach;


							$array_carac['edificio'] = str_replace("\r\n", "",str_replace('"', '&', $array_carac['edificio']));


						// si solo hay imagenes 
						else :	


							$planta = files_multidimensional(PATH.'assets/upload/planta/', $files, PATH.'assets/upload/planta/tmp/' , 'planta');
							if ($planta != null): 

								foreach($planta as $k1 => $v1):
									$array_carac['planta'][$k1]['imagen_planta'] = $v1;
								endforeach;

							 endif;

							 $cara = files_multidimensional(PATH.'assets/upload/cara/', $files, PATH.'assets/upload/cara/tmp/' , 'cara');
							if ($cara != null): 

								foreach($cara as $k2 => $v2):
									$array_carac['planta'][$k2]['imagen_cara']     = $v2;
									$array_carac['planta'][$k2]['caracteristicas'] = str_replace("\r\n", "",$array_carac['planta'][$k2]['caracteristicas']);
								endforeach;

							 endif;

							 $array_carac['edificio'] = str_replace("\r\n", "",str_replace('"', '&', $array_carac['edificio']));

							endif;

						

					break;
					
					default:
						# code...
					break;
				}

			else :
			

				switch ($layout) {
					case 'tekto_form':
						
						
						
						if(isset($array_carac['planta'])) :
							foreach($array_carac['planta'] as $k => $v):
								// echo $k;
								$array_carac['planta'][$k]['caracteristicas'] = str_replace("\r\n", "",$array_carac['planta'][$k]['caracteristicas']);
							endforeach;
						endif;

						$array_carac['edificio'] = str_replace("\r\n", "",str_replace('"', '&', $array_carac['edificio']));
					break;
						
					default:
						# code...
					break;
				}	
			
			endif;




			$insert = json_encode(str_replace("\r\n", "", str_replace(',', ' ', quitar_tildes($array_carac))), JSON_UNESCAPED_UNICODE);
			
			// dump($insert);
			// die();

			return $insert;


		}

		public static function widget_menu_proyects($id_linea)
		{

			$proyects = ProyectModel::find_by_attr(
				 array('proyecto.id_linea' => $id_linea), 
				'proyecto.id, proyecto.nombre_proyecto, proyecto.teaser, linea.logo', 
				'INNER JOIN linea ON linea.id=proyecto.id_linea');

			return $proyects;

		}

		public static function delete_proyect()
		{




			if( isset($_POST['id']) &&  ProyectModel::delete_by_id($_POST['id'])) :


			if (!file_exists(PATH.'assets/upload/gallery/'.$_POST['id'])) {
				rmdir(PATH.'assets/upload/gallery/'.$_POST['id'].'/');
			}
				echo 'Proyecto eliminado';

			endif;


		}


		public static function get_layout()
		{

			return add_widget($_POST['layout'], $_POST['update']);
		}

	}


?>