<meta name="description" content="<?php echo $params['meta_desc']; ?>">
<meta name="keywords" content="<?php echo $params['meta_keys']; ?>">
<div class="content_menu_proyects" style="min-height: 50px;">
    <div class="menu_proyects" style="display:none;">
        <?php  add_widget('menu_proyects', intval($params['id_linea'])); ?>
    </div>
    <div class="vol">
      <?php
        // echo $_SERVER['REQUEST_URI']; 
        //Si la url es de forte la quinta tiene que volver a proyectos de Bogotá
        if(strpos($_SERVER['REQUEST_URI'], 'quinta')){ ?>
    
        <a class="menu_pro" href="<?php echo URL.'proyectos_por_linea/forte/bogota_dc' ?>">
            <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
        </a>


      <?php } 

        //Si la url es de forte puerta del sol tiene que volver a proyectos de Cajicá
        else if(strpos($_SERVER['REQUEST_URI'], 'sol')){ ?>
        
         <a class="menu_pro" href="<?php echo URL.'proyectos_por_linea/forte/cajica___cundinamarca' ?>">
            <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
        </a>

      <?php } ?>
    </div>
    <div class="slider_banner">
      <?php
        if($params['galeria'] != '[""]') :
          foreach(json_decode($params['galeria']) as $img) :
            echo '<div class="item"><img src="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" /></div>';
          endforeach;
        endif;
      ?>
    </div>
    <!-- <div id="slider1_container" class="slider_banner" style="display: block; position: relative; margin: 0px auto;top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;z-index: 1;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo URL; ?>img/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <?php
                 //var_dump($params);
                if($params['galeria'] != '[""]') :
                    foreach(json_decode($params['galeria']) as $img) :
                        echo '<div><img u="image" src2="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" /></div>';
                    endforeach;
                endif;
            ?>
        </div>
        <style>
            div.jssorb21{
                position: absolute;
                bottom: 26px;
                left: 37.5%;   
            } 
            @media screen and (max-width: 1024px){
                div.jssorb21{
                    left: 45%;   
                } 
   
            }   
        </style>
        <div u="navigator" class="jssorb21">
            <div u="prototype" style="width: 10px; height: 10px;"></div>
        </div>
        <span u="arrowleft" class="jssora21l" style="width: 25px; height: 25px; top: 123px; left: 8px;">
        </span>
        <span u="arrowright" class="jssora21r" style="width: 25px; height: 25px; top: 123px; right: 8px">
        </span>
    </div> -->
</div>
<div class="info">
    <div class="container">
        <div>
            <img src="<?php echo URL.'assets/upload/img/'.$params['logo'] ?>">
        </div>
        <div>
            <?php
                echo $params["desc_proyecto"];
            ?>
        </div>
    </div>
</div>

<?php  $apto = json_decode($params['caracteristicas'], true); ?>
<div class="type_apartament">
    <div class="container">
        <div class="types">
            <div>
                <span>
                    Apartamentos
                </span>
            </div>
            
             <?php 
                if(isset($apto['titulo_tipo'] )):
                foreach($apto['titulo_tipo'] as $k => $v):
                    
                    $primero = ($k == 1) ? 'tekto' : '';

                    echo ' <div title="'.$k.'" class="text_type_tekto +++ '.$primero.' type'.$k.'">
                            <span>
                                Tipo <i>'.$v.'</i>
                            </span>
                        </div>';
                endforeach;
                endif;
             ?>
            <div>
            <?php 
                if($params["pdf"]!=""){?>
                    <a href="<?php echo URL.'assets/upload/pdf/'.$params["pdf"]?>" onclick="ga('send', 'event', 'Desc_PDF', 'Click', '<?php echo $params['nombre_proyecto']?>')" target="_blank" >
                        <img src="<?php echo URL?>assets/upload/img/descragar_catalogo.png" alt="descargar">
                    </a>   
                <?php }?>
                
            </div>
        </div>
      
        <?php if(isset($apto['planta'])):foreach($apto['planta'] as $k1 => $v2): ?>
           <div class="type_img type_<?php echo $k1; ?>">
                <img src="<?php echo URL.'assets/upload/planta/'.$v2['imagen_planta']; ?>">
            </div>
        <?php endforeach; endif; ?>

        <div class="caract">
            <div class="caract_tittle caract1 tekto">
                <span>
                    <span>
                        CARACTERÍSTICAS
                    </span>
                    <br>
                    DEL EDIFICIO
                </span>
            </div>
            <div class="caract_tittle caract2">
                <span>
                    <span>
                        CARACTERÍSTICAS
                    </span>
                    <br>
                    DEL APARTAMENTO
                </span>
            </div>
            <div class="caracter_content">
                <div class="caract_content caract1_content">
                    <?php echo $apto['edificio'] ?>
                </div>
                <div class="caract_content caract2_content">
                    

                    <?php foreach($apto['planta'] as $k3 => $v3 ): ?>
                    <div style="<?php echo ($k3 == 1) ? 'display:block;' : 'display:none;'; ?>" class="int_carac cara_type<?php echo $k3; ?>">
                        <!-- Imagen -->
                        <div class="imagen_des">
                            <img alt="" src="<?php echo URL.'assets/upload/cara/'.$v3['imagen_cara']; ?>">
                        </div>

                        <!-- Descripcion -->
                        <div class="desc_info">
                            <?php echo $v3['caracteristicas']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                
                    
                               
                </div>
            </div>
        </div>
    </div>
    <div class="mas_info_pro">
        <img src="<?php echo URL?>assets/upload/img/mas_info_proyect.png" alt="mas info">
    </div>
</div>
<div class="footer_proyectos">
    <!-- <div class="container"> -->
       
        <div class="mapa">
            <?php
                if($params['google_maps'] != '[""]') :
                    $google = json_decode($params['google_maps']);
                    $lat = $google->lat_z;
                    $long = $google->long_z;
                    $dir = json_decode($params['dir'], true);
                endif;
                //echo str_replace('../../', URL, $params["dir"]);
            ?>


             <div class="info_forte">
                   <div class="logo"><img alt="logo" src="<?php echo URL.'assets/upload/img/'.$dir['imagen']; ?>" width="150"></div>
                   <div id="direcciones"> <?php echo $dir['content'];?> </div>
               </div>

            <div id="map_canvas" style="width:100%; height:631px"></div>
        </div>
        <div class="formulario">
            <form id="form" class="form_tekto" action="<?php echo URL.'send_contact' ?>" method="POST">
                <span>
                    Registre sus datos y recibirá
                    <br>
                    información útil acerca del
                    <br>
                    <span>PROYECTO</span>
                </span>
                <div>
                   <!-- <input type="hidden" name="type_form" value="proyect_form">-->
                   <!-- <input type="hidden" name="id_proyecto" value="<?php // echo $params['id']; ?>" />-->
                    <input name="nombre" type="text" placeholder="Nombres y apellidos" required>
                    <br>
                    <input name="telefono" type="number" placeholder="Teléfono o Celular" required>
                    <br>
                    <input name="email" type="email" placeholder="E-mail" required>
                    <br>
                    <input type="text" name="ciudad_residencia" placeholder="Ciudad de residencia" required>
                    <br>
                    <input type="checkbox" required id="checkbox">
                    <div>
                        <span>Acepto ser contactado/a vía teléfono o correo electrónico</span>
                        <br>
                        <a href="http://www.proksol.com/politicas_privacidad.pdf" target="_blank">Protección de datos personales</a>
                    </div>
                     <input type="hidden" required name="proyecto_interes"  value="<?php echo $params['nombre_proyecto']?>">
                     <input type="hidden" required name="proyecto_slug"  value="<?php echo $params['slug']?>">
                    <?php $fecha = date("Y-m-d h:i:s");?>
                    <input type="hidden" required name="fecha"  value="<?php echo $fecha?>">
                   
                </div>
                <div>
                    <input type="submit" value="ENVIAR">
                </div>
            </form>
        </div>
    <!-- </div> -->
</div>
<?php
    $info_maps = json_decode($params['google_maps']);
    $logo_maps = $info_maps->logo;
?>
<script src="<?php echo URL; ?>examples-bootstrap/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>examples-bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- <script type="text/javascript" src="<?php echo URL; ?>js/jssor.slider.mini.js"></script> -->
<script src="<?php echo URL; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/libs/slick/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script  type="text/javascript" >
      function initialize() {
         var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>)
          }
          var map = new google.maps.Map(document.getElementById('map_canvas'),
                                        mapOptions);
          var image = '<?php echo URL."assets/upload/img/".$logo_maps; ?>';
          var myLatLng = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>);
          var beachMarker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              icon: image
          });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mas_info_pro').click(function(e) {
            $("html, body").animate({scrollTop: 5000 }, 1000);
        });
        // $('.menu_pro').click(function(e){
        //     e.preventDefault();
        //     $('.menu_proyects').slideToggle('slow');
        //     $('.vol').fadeOut('slow');
        // });
        google.maps.event.addDomListener(window, 'load', initialize);
     });
</script>
<script type="text/javascript" src="<?php echo URL.'assets/js/proyect.js'; ?>"></script>