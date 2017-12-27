<div class="content_menu_proyects"  style="min-height: 50px;">
    <div class="vol">
        <a href="<?php echo URL; ?>nuestros_proyectos">
             <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
        </a>
    </div>
    <div id="slider1_container" style="display: none; position: relative; margin: 0px auto;top: 0px; left: 0px; height: auto; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo URL; ?>img/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px;  height: auto; overflow: hidden;">
            <?php
                if($params['galeria'] != '[""]') :
                    foreach(json_decode($params['galeria']) as $img) :
                        echo '<div><img u="image" src2="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" /></div>';
                    endforeach;
                endif;
            ?>
        </div>
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 16px;">
            <div u="prototype" style="POSITION: absolute; WIDTH: 10px; HEIGHT: 10px; text-align:center; line-height:10px; color:White; font-size:12px;"></div>
        </div>
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
    </div>
</div>
<div class="info">
    <div class="container cont_proyectos_terminados">
        <div>
            <img src="<?php echo URL.'assets/upload/img/'.$params['logo'] ?>">
        </div>
        <div class="desc_pro_term">
            <?php
                echo $params["desc_proyecto"];
            ?>
        </div>
    </div>
</div>

<script src="<?php echo URL; ?>examples-bootstrap/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>examples-bootstrap/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>js/jssor.slider.mini.js"></script>
<script src="<?php echo URL; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('header').css({'background-color': 'rgba(<?php echo $params["color"]; ?>, 1)'});
     });
</script>
<script type="text/javascript" src="<?php echo URL.'assets/js/proyect.js'; ?>"></script>