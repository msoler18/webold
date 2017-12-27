<?php 

	Class User {



		public static function logout()
		
		{


			session_destroy();
			url_redirect(URL.'login_form');

		}


		public static function login()
		
		{

			
			$login = UserModel::authenticate_user($_POST['nombre_usuario'],md5($_POST['pass_usuario']));
			url_redirect(URL.'admin');

		}


		public static function login_extra()
		{
			nusoap_avisor();
		}



	}


?>