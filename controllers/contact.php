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

                  else:
                  
	                $query="SELECT * FROM proyecto WHERE slug='".$slug."'";
	                $proyecto=ContactModel::__query($query);
	               
	              	$file='/home/proksol/public_html/assets/upload/pdf/'.$proyecto[0]['pdf_mail'].';filename='.$proyecto[0]['pdf_mail'].''	;		
				
					
					$templateID=$proyecto[0]['id_template_mail'];
					
					$data=array('api_user' => 'proksolemailapi','api_key' => 'JIVR7SLZ8Q','CampaingKey'=>'427-DK9012CTYC',
					'To[0]' => $_POST['email'],'ToName[0]'=>'Envio 1','Subject'=> $_POST['nombre'].' gracias por contactarnos!',
					'From' => 'contacto@proksol.com','FromName' => 'Proksol','ReplyTo' =>'','Attachments' => 'true','SendingType'=>'1',
					'Datetype' => '1','TemplateID' => $templateID,'Files' => '@'.$file );
					//var_dump($data);
					try{
						$ch = curl_init();
						   if (FALSE === $ch)
       						 throw new Exception('failed to initialize');
						curl_setopt($ch, CURLOPT_URL, "https://api.masiv.co/email/tools/sendEmail");
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_HEADER,1);
						curl_setopt($ch, CURLOPT_POSTFIELDS, 
							$data);

						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$server_output = curl_exec ($ch);
						//var_dump($server_output);
						 if (FALSE === $server_output)
        					throw new Exception(curl_error($ch), curl_errno($ch));
						
						curl_close($ch);
                  	}catch(Exception $e) {

					    trigger_error(sprintf(
					        'Curl failed with error #%d: %s',
					        $e->getCode(), $e->getMessage()),
					        E_USER_ERROR);

					}
				 endif;

			url_redirect(URL.'gracias/'.$slug);

			endif;

		}

        public static function send_mail($slug){

         return __view('gracias:layout', $slug);

		}

	}

 ?>