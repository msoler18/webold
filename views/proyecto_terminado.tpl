<script src="<?php echo URL; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>libs/lightbox/shadowbox.js"></script>
<div class="content_menu_proyects"  style="min-height: 50px;">
<link rel="stylesheet" href="<?php echo URL; ?>/libs/lightbox/shadowbox.css">
  <div class="vol">
    <a href="<?php echo URL; ?>nuestros_proyectos">
     <img src="<?php echo URL; ?>assets/img/regresar_proyectos.png" alt="btn" class="mas_proyectos">
   </a>
 </div>
 <div class="banner" style="height: 50vh; background: url('<?php echo URL.'assets/upload/img/'.$params['slide_img']; ?>')no-repeat center; background-size:cover;">
    <!-- <?php
    if($params['galeria'] != '[""]') :
      foreach(json_decode($params['galeria']) as $img) :
        echo '<div class="item"><img src="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" alt=""></div>';
      endforeach;
    endif;
    ?> -->
    <!-- <img src="<?php echo URL.'assets/upload/img/'.$params['slide_img']; ?> " alt=""> -->
  </div>
</div>
<div class="info">
  <div class="container cont_proyectos_terminados">
    <div>
      <div class="vertical">
        <img src="<?php echo URL.'assets/upload/img/'.$params['logo'] ?>">
      </div>
    </div>
    <div class="desc_pro_term">
      <?php
      echo $params["desc_proyecto"];
      ?>
    </div>
    <ul class="slider_mini">
      <?php
      if($params['galeria'] != '[""]') :
        foreach(json_decode($params['galeria']) as $img) :
          echo '<li class="item" style="background: url('.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.')no-repeat center; background-size: cover;">
            <a href="'.URL.'assets/upload/gallery/'.$params['id'].'/'.$img.'" rel="shadowbox[prt]"></a>
          </li>';
        endforeach;
      endif;
      ?>
    </ul>
  </div>
</div>

<script src="<?php echo URL; ?>examples-bootstrap/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>examples-bootstrap/ie10-viewport-bug-workaround.js"></script>
<!-- <script type="text/javascript" src="<?php echo URL; ?>js/jssor.slider.mini.js"></script> -->

<script type="text/javascript" src="<?php echo URL; ?>/libs/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('header').css({'background-color': 'rgba(<?php echo $params["color"]; ?>, 1)'});
      Shadowbox.init({
      
      }); 

    $('.slider_mini').slick({
      dots: true,
      arrows: true,
      prevArrow: '<a class="prev-arrow arrow"></a>',
      nextArrow: '<a class="next-arrow arrow"></a>',
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });

    // Lightbox
    // var $overlay = $('<div class="overlay"></div>');
    // var $image = $('<img class="img_modal">');
    // var $caption = $('<p></p>');

    // $overlay.append($image);
    // $('body').append($overlay);

    // $('.slider_mini .item a').click(function(){
    //   event.preventDefault();
    //   var href = $(this).attr('href');
    //   $image.attr('src', href);
    //   $overlay.fadeIn();
    //   $('body').css('overflow', 'hidden');
    // });

    // $overlay.click(function(){
    //   $(this).fadeOut();
    //   $('body').css('overflow', 'scroll');
    //   $('body').css('overflow-x', 'hidden');
    // });

    // $(document).keyup(function(e) {
    //   if (e.keyCode == 27) {
    //     $overlay.fadeOut();
    //     $('body').css('overflow', 'scroll');
    //     $('body').css('overflow-x', 'hidden');
    //   }
    // });
    
  });
</script>
<!-- <script type="text/javascript" src="<?php echo URL.'assets/js/proyect.js'; ?>"></script> -->