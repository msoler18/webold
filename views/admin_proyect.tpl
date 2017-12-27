
<?php 


$ciudades = $params['ciudades'];
$estados  = $params['estados'];
$tipos    = $params['tipos'];
$lineas   = $params['lineas'];
$publicado = $params['publicados'];

unset($params['ciudades']);
unset($params['estados']);
unset($params['tipos']);
unset($params['lineas']);

?>

<script type="text/javascript" src="<?php echo URL.'libs/tiny/tinymce.min.js'?>"></script>
<script src="<?php echo URL; ?>libs/ckeditor/ckeditor.js"></script>
<script src="<?php echo URL; ?>libs/ckeditor/adapters/jquery.js"></script>

<div class="admin">

  <h1 class="title"><i class="fa fa-cubes"></i> Añadir Proyecto </h1>

  <form enctype="multipart/form-data" action="<?php  if(isset($params['action'])) :  echo $params['action']; unset($params['action']); else : echo URL.'admin/insert_proyect'; endif; ?>" method="POST">

    <?php echo isset($params['id']) ? '<input type="hidden" name="id" value="'.$params['id'].'"/>'  : ''; ?>

    <!-- Nombre -->
    <div class="form-group inline">

      <label>Status </label>

      <select name="publicado"  required>

        <?php 


        foreach($publicado  as $k => $v ) : 

        if(isset($params['publicado']) && $k == $params['publicado'] ) :

        $selected = 'selected';

        else :

        $selected = '';

        endif;	

        echo '<option '.$selected.' value="'.$k.'">'.$v.'</option>';

        endforeach; 

        ?>
      </select>
      <label>Mostrar en el home </label>
      <?php 
        if(isset($params['home'])){
          $si = ($params['home']=="S") ? 'selected' : ''; 
          $no = ($params['home']=="N") ? 'selected' : '';
        }else{
          $si = ""; 
          $no = "";
        }
      ?>
      <select name="home"  required>
        <option value="S" <?php echo $si; ?> >SI</option>
        <option value="N" <?php echo $no; ?> >NO</option>

      </select>
      <label>Nombre Proyecto</label>
      <input value="<?php echo isset($params['nombre_proyecto']) ? $params['nombre_proyecto'] : ''; ?>" type="text" placeholder="Nombre Proyecto" name="nombre_proyecto" required />


    </div>

    <!-- Email -->

    <div class="form-group inline">

      <label>Email</label>
      <input value="<?php echo isset($params['email']) ? $params['email'] : ''; ?>" type="email" placeholder="Email" name="email" required />

    </div>

    <!-- Logo File -->

    <div class="form-group file_group inline">

      <?php if(isset($params['logo']) &&  $params['logo'] != '') : ?>

      <input type="hidden" name="logo" value="<?php echo $params['logo'];?>" />
      <label>Logo</label>
      <img class="file_image"  height="200" alt="Logo Proyect" src="<?php echo URL.'assets/upload/img/'.$params['logo']; ?> "  />
      <a class="change_logo" href="#"><i class="fa fa-pencil-square-o"></i> Editar Logo</a>

      <?php else : ?>

      <label>Logo</label>

      <img class="file_image" src="#"  />
      <input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="logo" />

      <?php endif; ?>


    </div>

    <!-- Slide img -->

    <div class="form-group file_group inline">

      <?php if(isset($params['slide_img']) &&  $params['slide_img'] != '') : ?>

      <input type="hidden" name="slide_img" value="<?php echo $params['slide_img'];?>" />
      <label>Slide Image</label>
      <img class="file_image"  height="200" alt="Slide imag" src="<?php echo URL.'assets/upload/img/'.$params['slide_img']; ?> "  />
      <a class="change_slide_img" href="#"><i class="fa fa-pencil-square-o"></i> Editar Slide</a>

      <?php else : ?>

      <label>Slide Image</label>

      <img class="file_image" src="#"  />
      <input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="slide_img"  />

      <?php endif; ?>


    </div>

    <!-- Estado select -->

    <div class="form-group inline">

      <label>Estado</label>

      <select name="estado"  required>

        <?php 

        foreach($estados as $k => $v ) : 

        if(isset($params['estado']) && $k == $params['estado'] ) :

        $selected = 'selected';

        else :

        $selected = '';

        endif;	


        echo '<option '.$selected.' value="'.$k.'">'.$v.'</option>';

        endforeach; 

        ?>

      </select>

    </div>

    <!-- Ciudades -->

    <div class="form-group inline">

      <label>Ciudades</label>

      <select name="ciudad" required>

        <?php 



        foreach($ciudades as $k => $v ) : 

        if(isset($params['ciudad']) && $k == $params['ciudad'] ) :

        $selected = 'selected';

        else :

        $selected = '';

        endif;	


        echo '<option '.$selected.' value="'.$k.'">'.$v.'</option>';

        endforeach; 

        ?>

      </select>

    </div>




    <!-- Tipo select -->

    <div class="form-group inline">

      <label>Tipo</label>
      <select name="id_tipo" required>

        <?php 

        foreach($tipos as $v1 ) : 

        if(isset($params['id_tipo']) && $v1['id'] == $params['id_tipo'] ) :

        $selected = 'selected';

        else :

        $selected = '';

        endif;	


        echo '<option '.$selected.' value="'.$v1['id'].'">'.$v1['nombre_tipo'].'</option>';

        endforeach; 

        ?>


      </select>

    </div>

    <!-- Teaser -->

    <div class="form-group file_group inline">

      <label>Teaser</label>

      <?php if(isset($params['teaser']) &&  $params['teaser'] != '') : ?>

      <input type="hidden" name="teaser" value="<?php echo $params['teaser'];?>" />
      <label>Logo</label>
      <img class="file_image"  height="200" alt="Teaser Proyect" src="<?php echo URL.'assets/upload/img/'.$params['teaser']; ?> "  />
      <a class="change_teaser" href="#"><i class="fa fa-pencil-square-o"></i> Editar Logo</a>

      <?php else : ?>

      <img class="file_image" src="#"  />
      <input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="teaser" />

      <?php endif; ?>


    </div>



    <!-- Linea select -->

    <div class="form-group inline">

      <label>Linea</label>
      <select name="id_linea" id="id_linea" required>

        <?php 

        foreach($lineas as $v1 ) : 
        if(isset($params['id_linea']) && $v1['id'] == $params['id_linea'] ) :
        $selected = 'selected';
        else :
        $selected = '';
        endif;	
        echo '<option '.$selected.' value="'.$v1['id'].'">'.$v1['nombre_linea'].'</option>';
        endforeach; 

        ?>


      </select>

    </div>

    <!-- PLantas -->

    <!-- <div class="form-group inline">
            
            <label>Planta</label> 

            <a class="add_apto"><i class="fa fa-plus"></i> Añadir Apto </a>

            <?php /* if(isset($params['planta']) &&  $params['planta'] != '' && $params['planta'] != '-') : $plantas = json_decode($params['planta']); ?>
            
                    <?php foreach($plantas as $planta) :  ?>

                            <div class="apto">

                                    <a onClick="nd(this.parentNode)" class="remove_apto"><i class="fa fa-times"></i> </a>
                                    <img height="200" class="file_image" src="<?php echo URL.'assets/upload/img/'.$planta; ?>"  />
                                    <input type="hidden" name="planta[]" value="<?php echo $planta; ?>" /> 

                    </div>
            

                    <?php 

                            endforeach;

                    endif;		

                */ ?>


    </div> -->

    <!-- Pdf -->

    <div class="form-group inline layoutSelect">

      <?php if(isset($params['pdf']) &&  $params['pdf'] != '') : ?>

      <label>Pdf</label>
      <input type="hidden" name="pdf" value="<?php echo $params['pdf'];?>" />
      <span class="pdf"><i class="fa fa-file-pdf-o"></i> <?php echo $params['pdf'];?></span>
      <a class="change_pdf" href="#"><i class="fa fa-pencil-square-o"></i> Editar Pdf</a>

      <?php else : ?>

      <label>Pdf</label>
      <input type="file" name="pdf" accept="application/pdf">


      <?php endif; ?>

    </div>


    <!--Admin Mails-->

    <div class="form-group inline">

      <label>ID Template Masiv</label>
         
      <input value="<?php echo isset($params['id_template_mail']) ? $params['id_template_mail'] : ''; ?>" type="text" placeholder="ID template Masiv" name="id_template_mail"/>

    </div>

    <div class="form-group inline layoutSelect">

      <?php if(isset($params['pdf_mail']) &&  $params['pdf_mail'] != '') : ?>

      <label>Archivo Adjunto a Email</label>
      <input type="hidden" name="pdf_mail" value="<?php echo $params['pdf_mail'];?>" />
      <span class="pdf"><i class="fa fa-file-pdf-o"></i> <?php echo $params['pdf_mail'];?></span>
      <a class="change_pdf_mail" href="#"><i class="fa fa-pencil-square-o"></i> Editar Pdf</a>

      <?php else : ?>

      <label>Pdf</label>
      <input type="file" name="pdf_mail" accept="application/pdf">


      <?php endif; ?>

    </div>


    <!-- Gallery -->

    <div class="form-group full">

      <label>Galeria</label>	

      <?php if(isset($params['galeria']) &&  $params['galeria'] != '' && $params['galeria'] != '-') : $gallery = json_decode($params['galeria']); ?>

      <a class="add_gallery"><i class="fa fa-plus"></i> Añadir mas imagenes</a>

      <ul id="sortable">

        <?php foreach($gallery as $k => $gal) :  ?>



        <li>
          <input type="hidden" name="galeria[]" value="<?php echo $gal; ?>" accept="image/x-png, image/gif, image/jpeg" name="image"  />	
          <img height="200"  src="<?php echo URL.'assets/upload/gallery/'.$params['id'].'/'.$gal; ?>" alt="<?php echo $k; ?>" /> 
          <a class="remove_img_gallery"> <i class="fa fa-times"></i></a>
        </li>


        <?php endforeach; ?>

      </ul>




      <?php else : ?>

      <output id="list"></output>
      <input class="galeria" type="file" onchange="handleFileSelect(this.files)" multiple="true" name="galeria[]" />


      <?php endif; ?>

    </div>

    <!-- Color -->

    <div class="form-group">

      <label>Color</label>
      <input value="<?php echo isset($params['color']) ? $params['color'] : ''; ?>" type="text" placeholder="Color del Proyecto (en rgba)" name="color"  />	

    </div>



    <!-- Descripcion Prpyecto -->

    <div class="form-group">

      <label>Descripcion Proyecto</label>
      <textarea class="ckeditor" name="desc_proyecto"><?php echo isset($params['desc_proyecto']) ? $params['desc_proyecto'] : ''; ?></textarea>

    </div>

    <!-- Goolge maps -->

    <div class="form-group">

      <label>Google Maps</label>

      <?php if(isset($params['google_maps']) && $params['google_maps'] != '' ) : $google = json_decode($params['google_maps']);  ?>

      <div class="inline"><input name="google_maps[lat_z]" type="text" placeholder="Latitud  Zona"   
                                 value="<?php echo $google->lat_z ?>" /></div>

      <div class="inline"><input name="google_maps[long_z]" type="text" placeholder="Longitud Zona"  
                                 value="<?php echo $google->long_z ?>" /></div>

      <div class="inline"><input name="google_maps[lat_p]" type="text" placeholder="Latitud  Punto"  
                                 value="<?php echo $google->lat_p ?>" /></div>

      <div class="inline"><input name="google_maps[long_p]" type="text" placeholder="Longitud  Punto" 
                                 value="<?php echo $google->long_p ?>" /></div>

      <div class="inline">
        <a class="change_img_google" href="#"><i class="fa fa-pencil-square-o"></i> Editar Google Logo</a>	
        <img height="200" class="file_image" src="<?php echo URL.'assets/upload/img/'.$google->logo; ?>"  />
        <input type="hidden" name="google_maps[logo]" value="<?php echo $google->logo; ?>"  />

      </div>

      <div class="full"><br/><label>Google Maps description</label><textarea class="ckeditor" name="google_maps[desc]"><?php echo $google->desc ?></textarea> </div>

      <?php else : ?>

      <div class="inline"><input name="google_maps[lat_z]" type="text" placeholder="Latitud  Zona"   /></div>
      <div class="inline"><input name="google_maps[long_z]" type="text" placeholder="Longitud Zona"  /></div>
      <div class="inline"><input name="google_maps[lat_p]" type="text" placeholder="Latitud  Punto"  /></div>
      <div class="inline"><input name="google_maps[long_p]" type="text" placeholder="Longitud  Punto" /></div>
      <div class="inline">
        <img class="file_image" src="#"  />	

        <input class="file" type="file"  accept="image/x-png, image/gif, image/jpeg" name="google_maps"  />

      </div>

      <div class="full"><br/><label>Google Maps description</label>	<textarea name="google_maps[desc]"></textarea></div>


      <?php endif; ?>

    </div>

    <!-- Direcciones -->

    <div class="form-group">

      <?php 


      if(isset($params['dir'])) : 
      $dir = json_decode($params['dir'], true);


      //die();
      endif;
      ?>

      <label>Direcciones</label>
      <textarea  class="nd" name="dir[content]"><?php echo isset($dir['content']) ? $dir['content'] : ''; ?></textarea>

    </div>


    <div class="form-group">
      <label for="">Imagen direccion</label>


      <?php 



      if(isset($dir['imagen']) && $dir['imagen'] !=''):

      ?>	

      <input type="hidden" name="dir[imagen]" value="<?php echo $dir['imagen'];?>" />

      <img class="file_image"  height="200" alt="DIR image" src="<?php echo URL.'assets/upload/img/'.$dir['imagen'];?> "  />
      <a class="change_dir_img" href="#"><i class="fa fa-pencil-square-o"></i> Editar Slide</a>

      <?php else : ?>


      <img class="file_image" src="#"  />
      <input class="file" type="file" name="dir" accept="image/x-png, image/gif, image/jpeg" />

      <?php endif;?>



    </div>

    <!-- Layout -->
    <div class="form-group full layoutSelect">
      <label for="">Layout proyecto</label>
      <select id="layout" name="layout" class="form-control">
        <option <?php echo (isset($params['layout']) && $params['layout'] == 'tekto_form') ? 'selected' : '' ; ?> value="tekto_form">Layout tekto</option>
        <option <?php echo (isset($params['layout']) && $params['layout'] == '424_form') ? 'selected' : '' ; ?> value="424_form">Layout 424</option>
        <option <?php echo (isset($params['layout']) && $params['layout'] == 'best_wester_form') ? 'selected' : '' ; ?> value="best_wester_form">Layout Best Wester</option>
        <option <?php echo (isset($params['layout']) && $params['layout'] == 'casa_delrio_form') ? 'selected' : '' ; ?> value="casa_delrio_form">Layout Casa del Rio</option>
        <option <?php echo (isset($params['layout']) && $params['layout'] == 'sin_layout') ? 'selected' : '' ; ?> value="sin_layout">Sin Layout</option>
      </select>
    </div>


    <!-- Caracteristicas -->

    <div class="form-group layoutSelect" id="carac" >

    </div>

    <!-- <div class="form-group">
            
            <label>Caracteristicas</label>
            <textarea class="ckeditor" name="caracteristicas"><?php //echo isset($params['caracteristicas']) ? $params['caracteristicas'] : ''; ?></textarea>

    </div> -->

    <div class="form-group">
      <label for="">Meta description</label>
      <textarea class="ckeditor" name="meta_desc" id="" cols="30" rows="10">
			<?php echo isset($params['meta_desc']) ? $params['meta_desc'] : ''; ?>
      </textarea>
    </div>

    <div class="form-group">
      <label for="">Meta keys</label>
      <input type="text" name="meta_keys" class="form-control" placeholder="Meta keys" value="<?php echo isset($params['meta_keys']) ? $params['meta_keys'] : ''; ?>" />
    </div>




    <div class="form-group">

      <input type="submit" value="Enviar" />

    </div>


  </form>
  <script type="text/javascript">

    tinymce.init({
      selector: ".nd",
      plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
      ]

    });

    // $('textarea').ckeditor(); 
    CKEDITOR.editorConfig = function (config) {
      // Settings for CKEditor 4.x and above
      config.allowedContent = true;
    };
    CKEDITOR.replace({allowedContent: true});
    CKEDITOR.replace({extraAllowedContent : '*(*);*{*}'});
  </script>

  <script type="text/javascript">

    $(document).ready(function () {
      //SI ELIJE LA LINEA EXPECTATIVA NO MUESTRA EL SELECT DE LAYAUTS
      if ($('#id_linea').val() == 8) {
        var inputLayut = '<input type="hidden" name="layout" value="expectativa" class="layoutExpecta">';
        inputLayut += '<input type="hidden" name="pdf" value="no-pdf" class="layoutExpecta">';
        inputLayut += '<input type="hidden" name="caracteristicas[edificio]" value="No-caracteristicas" class="layoutExpecta">';
        $(".layoutSelect").fadeOut();
        $(".add_type").fadeOut();
        $("form").append(inputLayut);
      }
      $('#id_linea').change(function () {
        var linea = $(this).val();
        if (linea == 8) {
          var inputLayut = '<input type="hidden" name="layout" value="expectativa" class="layoutExpecta">';
          inputLayut += '<input type="hidden" name="pdf" value="no-pdf" class="layoutExpecta">';
          inputLayut += '<input type="hidden" name="caracteristicas[edificio]" value="No-caracteristicas" class="layoutExpecta">';
          $(".layoutSelect").fadeOut();
          $(".add_type").fadeOut();
          $("form").append(inputLayut);
        } else {
          $(".layoutSelect").fadeIn();
          $(".add_type").fadeIn();
          $(".layoutExpecta").remove();
        }
      });

      $('#layout').trigger('change');
    });

    $('#layout').change(function (e) {
      var val = $(this).val();

      <?php if (isset($params['caracteristicas'])) : ?>
              var update = true;
              var id = <?php echo $params['id']; ?>;
              <?php else : ?>
              var update = false;
              var id = false;
              <?php endif; ?>
              $.ajax({
                url: "<?php echo URL.'get_layout'; ?>",
                cache: false,
                type: 'POST',
                data: {'layout' : val, 'update' : update, 'id' : id},
                success: function (html) {
                  $("#carac").fadeIn(100, 'fold').html(html);
                }
              });



    });


    $("#sortable").sortable();

    $('.change_slide_img').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input class="file" type="file"  onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="slide_img"  />');
      $(this).remove();

    });

    $('.change_dir_img').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input class="file" type="file"  onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="dir"  />');
      $(this).remove();

    });

    $('.add_gallery').click(function (e) {

      e.preventDefault();


      $(this).parent().append('<output id="list"></output><input class="gallery" onchange="handleFileSelect(this.files)" type="file" multiple="true" name="galeria[]" />');
      $(this).remove();

    });

    $('.change_img_google').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input class="file" type="file" onChange="readURL(this,this.previousElementSibling);" accept="image/x-png, image/gif, image/jpeg" name="google_maps"  />');
      $(this).remove();

    });

    $('.change_pdf').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input  type="file" name="pdf" accept="application/pdf" />');

    });
    $('.change_pdf_mail').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input  type="file" name="pdf_mail" accept="application/pdf" />');

    });

    $('.change_logo').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input class="file" onChange="readURL(this,this.previousElementSibling);" type="file"  accept="image/x-png, image/gif, image/jpeg" name="logo"  />');
      $(this).remove();

    });

    $('.change_teaser').click(function (e) {

      e.preventDefault();

      $(this).parent().children('input[type="hidden"]').remove();
      $(this).parent().append('<input class="file" onChange="readURL(this,this.previousElementSibling);" type="file"  accept="image/x-png, image/gif, image/jpeg" name="teaser"  />');
      $(this).remove();

    });


    $('.add_apto').click(function (e) {

      e.preventDefault();

      $(this).parent().append('<div class="apto"><a onClick="nd(this.parentNode)" class="remove_apto"><i class="fa fa-minus"></i> Remove apto</a><img class="file_image" src="#"  />'
              + '<input onChange="readURL(this,this.parentNode.childNodes[1]);" class="file" type="file" name="planta[]" /> </div>');


    });


    $('.file').change(function () {

      var rut = $(this).parent().children('img');

      readURL(this, rut);


    });

    $('.remove_img_gallery').click(function (e) {

      e.preventDefault();

      $(this).parent().remove();

    });

    function handleFileSelect(files) {
      // var files = evt.target.files; // FileList object
      console.log(files);
      // Loop through the FileList and render image files as thumbnails.
      for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('image.*')) {
          continue;
        }

        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function (theFile) {
          return function (e) {
            // Render thumbnail.
            var span = document.createElement('span');
            span.innerHTML = ['<img  class="thumb" src="', e.target.result,
              '" title="', escape(theFile.name), '"/>'].join('');
            document.getElementById('list').insertBefore(span, null);
          };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
      }
    }


    function nd(but) {


      $(but).remove();
    }

    function readURL(input, rut) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(rut);
        reader.onload = function (e) {


          $(rut)
                  .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

  </script>
</div>
