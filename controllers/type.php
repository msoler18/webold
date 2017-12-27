<?php 

	Class Type {



		public static function all_types()
		{

			$all_proyects = TypeModel::find_all();

			__view('admin_types:admin_layout', $all_proyects);


		}

		public static function insert_type()
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


 	



			if(TypeModel::save($_POST)) :

				$url = URL."admin/types";
				url_redirect($url);

			endif;


		}


		public function update_by_type()
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
					
					echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				echo 'rrrr';

			} 



			if(isset($_POST['id']) && TypeModel::update($_POST, ' WHERE id = '.$_POST['id'].' ')) :

				$url = URL."admin/types";
				url_redirect($url);

			endif;


		}

		public static function update_type($array)
		{

		

			 $type = TypeModel::find_id($array['id']);

			 if($type) :
			 	
			 	$type = $type[0];	
			 	$type['action'] = URL.'admin/update_by_type';


			 	else :


			 	url_redirect(URL.'admin/type');	


			 endif;

			__view('admin_type:admin_layout', $type);
		
		

		}


		public static function delete_type()
		{




			if( isset($_POST['id']) &&  TypeModel::delete_by_id($_POST['id'])) :

				
				echo 'Tipo eliminado';

			endif;


		}

	}


?>