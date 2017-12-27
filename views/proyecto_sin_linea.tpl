<?php 
$id = $params["id"];
?>

<meta name="description" content="<?php echo $params['meta_desc']; ?>">
<meta name="keywords" content="<?php echo $params['meta_keys']; ?>">
<div  class="content_menu_proyects <?php echo $id; ?>" style="min-height: 50px;">
  <div class="vol">
    <a href="<?php echo URL; ?>proyectos/comercio_e_inversion/santa_marta">
      <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
    </a>
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
    <!-- <div id="slider1_container" class="slider_banner" style="display: none; position: relative; margin: 0px auto;top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo URL; ?>img/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <?php
                // var_dump($params);
                if($params['galeria'] != '[""]') :
                    foreach(json_decode($params['galeria']) as $img) :
                        echo '<div><img u="image" src2="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" /></div>';
                    endforeach;
                endif;
            ?>
        </div>
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <div u="prototype" style="POSITION: absolute;width: 10px; height: 10px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
      </div> -->
    </div>
    <div class="info">
      <div class="container">
        <div class="sin_linea_logo">
          <img src="<?php echo URL.'assets/upload/img/'.$params['logo'] ?>">
        </div>
        <div class="sin_linea_desc">
          <?php
          echo $params["desc_proyecto"];
          ?>
        </div>
      </div>
    </div>
    <div class="type_apartament">
      <div class="container clearfix">
        <!-- Layout por proyecto -->
        <?php


        //$params['caracteristicas'][0]= $params['pdf'];
        $parametros =array();
        array_push( $parametros ,$params['caracteristicas']);
        array_push( $parametros ,$params['pdf']);
        add_widget($params['layout'].'_front',$parametros);

        ?>
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
        //echo str_replace('../../',URL,$params["dir"]);
        // dump($dir);
        ?>

        <div class="info_tekto">
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
    google.maps.event.addDomListener(window, 'load', initialize);
  });
</script>
<script type="text/javascript" src="<?php echo URL.'assets/js/proyect.js'; ?>"></script>