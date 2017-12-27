<?php 

	Class Contact 
	{

		public static function send_contact()
		{  

           //Formulario de contacto

            if($_POST['proyecto_interes']=='contactenos'):
               
              $_POST['ciudad_residencia'] =  $_POST['ciudad_residencia'].'-'.$_POST['pais'];

              unset ($_POST['pais']);

            endif;

             $slug = $_POST['proyecto_slug'];
             unset($_POST['proyecto_slug']);

       //echo $slug;exit;
			if(ContactModel::save($_POST)) :

				 if($_POST['proyecto_interes']=='contactenos'):
                 
                   $para      = "comercial@proksol.com,cuentas3@coloralcuadrado.com";
                   //$para      = "desarrollo3@coloralcuadrado.com";
				   $titulo    = 'Contacto - PROKSOL';
				   $mensaje   = '
				   <html>
	                  <head>
	                    <title>Contacto</title>
	                  </head>
		                  <body style="width:650px">
		                    <p>
		                        Nombre: '.$_POST['nombre'].'<br>
		                        Teléfono: '.$_POST['telefono'].'<br>
		                        Correo: '. $_POST['email'].'<br>
		                        Ciudad: '. $_POST['ciudad_residencia'].'<br>
		                        Comentarios: '. $_POST['comentarios'] .'<br>
		                    </p>
		                  </body>
                   </html>';
				   
    			   $headers = "From: " . strip_tags('comercial@proksol.com') . "\r\n";
				   $headers .= "Reply-To: ". strip_tags('comercial@proksol.com') . "\r\n";
				   $headers .= "MIME-Version: 1.0\r\n";
				   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                   mail($para, $titulo, $mensaje, $headers);

				 endif;

			//self::send_mail($_POST , $slug);
			url_redirect(URL.'gracias/'.$slug);

			endif;

		}


		public static function send_mail($slug){
         // var_dump($post);
         // var_dump($slug);
			//echo $slug;exit;
        	
         //url_redirect('gracias/'.$slug);
         return __view('gracias:layout', $slug);

		}

	}

 ?>