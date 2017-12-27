<?php 

	Class Line {



		public static function all_lines()
		{

			$all_proyects = LineModel::find_all();

			__view('admin_lines:admin_layout', $all_proyects);


		}

		public static function insert_line()
		{

			$Pathimg = PATH.'assets/upload/img/';
	
			// Logo

			if (isset($_FILES["logo"]["name"]) && ($_FILES["logo"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["logo"]["name"];
				$teaser_imgNameTemp 	= $_FILES["logo"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['logo'] = $teaser_img ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}


 			$_POST['slug']	= url($_POST['nombre_linea']);

			if(LineModel::save($_POST)) :

				$url = URL."admin/lines";
				url_redirect($url);

			endif;


		}


		public function update_by_line()
		{

			
			$Pathimg = PATH.'assets/upload/img/';
	
			// Logo

			if (isset($_FILES["logo"]["name"]) && ($_FILES["logo"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["logo"]["name"];
				$teaser_imgNameTemp 	= $_FILES["logo"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['logo'] = $teaser_img ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			} 

			$_POST['linea_desc'] = ($_POST['linea_desc'] == '') ? ' ' : $_POST['linea_desc'];

			$_POST['slug']	= url($_POST['nombre_linea']);

			if(isset($_POST['id']) && LineModel::update($_POST, ' WHERE id = '.$_POST['id'].' ')) :

				$url = URL."admin/lines";
				url_redirect($url);

			endif;


		}

		public static function update_line($array)
		{

		

			 $line = LineModel::find_id($array['id']);

			 if($line) :
			 	
			 	$line = $line[0];	
			 	$line['action'] = URL.'admin/update_by_line';


			 	else :


			 	url_redirect(URL.'admin/line');	


			 endif;

			__view('admin_line:admin_layout', $line);
		
		

		}


		public static function delete_line()
		{




			if( isset($_POST['id']) &&  LineModel::delete_by_id($_POST['id'])) :

				
				echo 'Linea eliminado';

			endif;


		}

	}


?>