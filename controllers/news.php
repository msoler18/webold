<?php


	Class News {

		public static function all_news()
		{

			$all_news = NewsModel::find_all();

			__view('admin_news:admin_layout', $all_news);


		}

		public static function insert_new()
		{

			$_POST['fecha'] = date("Y-m-d");

			$Pathimg = PATH.'assets/img/upload/';
	
			// Si teaser

			if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["image"]["name"];
				$teaser_imgNameTemp 	= $_FILES["image"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['image'] = $teaser_img ;
					
				}
				else {
					
					// echo'eeeee';			
				}
			}
			else {
				// $teaser_img  = '';
				// echo 'rrrr';

			}	

			

			if(NewsModel::save($_POST)) :

				?>

				<script type="text/javascript">

				!function ($) {



				<?php echo "window.location.href = '".URL."admin/news';";	?>
			


				}(window.jQuery);		


			</script>


			<?php 

			endif;


		}


		public function update_by_new()
		{

			$Pathimg = PATH.'assets/img/upload/';
	
			// Si teaser

			if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["name"] <> '') ) {
				$teaser_img 			= $_FILES["image"]["name"];
				$teaser_imgNameTemp 	= $_FILES["image"]["tmp_name"];
				$teaser_imgNameNew 	= $Pathimg . basename($teaser_img);

				// Si se pudo copiar la nueva imágen en el destino
				if(move_uploaded_file($teaser_imgNameTemp,$teaser_imgNameNew)) {
					
					$_POST['image'] = $teaser_img;
					
				}
				else {
					
						
				}
			}
			else {
				

			}	

			if(NewsModel::update($_POST, 'WHERE id = '.$_POST['id'].'')) :

				?>

				<script type="text/javascript">

				!function ($) {



				<?php echo "window.location.href = '".URL."admin/news';";	?>
			


				}(window.jQuery);		


			</script>


			<?php 
			endif;


		}

		public static function update_new($array)
		{

		

			 $new= NewsModel::find_id($array['id']);

			 if($new) :
			 	
			 	$new = $new[0];	
			 	$new['action'] = URL.'admin/update_by_new';


			 	else :


			 	url_redirect(URL.'admin/news');	


			 endif;

			__view('admin_new:admin_layout', $new);
		
		

		}


		public static function delete_new()
		{




			if( isset($_POST['id']) &&  NewsModel::delete_by_id($_POST['id'])) :

				
				echo 'Noticia eliminado';

			endif;


		}



	}


?>	