<script type="text/javascript" src="<?php echo URL; ?>assets/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="<?php echo URL ?>assets/js/example.js"></script>
<link rel="stylesheet" type="text/css" href=" http://alvarotrigo.com/fullPage/jquery.fullPage.css">

<div id="fullpage">
  
  <div class="section banner-home" style="background-image:url(<?php echo URL; ?>assets/img/FLQ-banner.png); background-size:contain;">
    <a href="<?php echo URL; ?>proyecto/forte_la_quinta"></a>
  </div>
  <div class="section banner-home" style="background-image:url(<?php echo URL; ?>assets/img/TSM-banner.png); background-size:contain;">
    <a href="<?php echo URL; ?>proyecto/tekto_san_marcos"></a>
  </div>
  <!-- <div class="section banner-home" style="background-image:url(<?php echo URL; ?>assets/img/vivienda-compensar.png); background-size:contain;"></div> -->

  <?php
  require_once PATH . 'models/proyect.php';

  $proyects = ProyectModel::all_active();

  $i = 0;

  foreach ($proyects as $proyect) :
    if ($proyect['home'] == 'S'):
      ?>
      <div class="section" id="section<?php echo $i; ?>"  style="background-image:url(<?php echo URL . 'assets/upload/img/' . $proyect['slide_img']; ?>)">
        <div class="intro">
          <P><?php $first = strtok($proyect['nombre_proyecto'], " ");
    echo '<span>' . $first . '</span> ' . str_replace($first, '', $proyect['nombre_proyecto']);
      ?></p>
          <a href="<?php echo URL . 'proyecto/' . url($proyect['slug']); ?>" class="view_proyect">
            <span>
              Ver Proyecto
            </span>
          </a>
        </div>
      </div>

      <?php
      $i++;
    endif;
  endforeach;
  ?>

</div>

<script type="text/javascript">
  $(document).ready(function () {

    //imagenes responsive del home
    var anchoVentana = $(window).width();
    var bg;
    if (anchoVentana < 769) {
      $('.banner-home').each(function() {
        var bg = $(this).css('background-image');
        bg = bg.replace('url(','').replace(')','');
        bg = bg.replace('.png','-mobile.png');

        $(this).css('background-image', 'url('+bg+')');
        // console.log(bg);
        bg= '';
      });
    }

  var slideTimeout;

    $('#fullpage').fullpage({
      anchors: [<?php
      $con = 2;
      foreach ($proyects as $proyect) {
        $con ++;
        if ($con == 1) {
          echo "'" . $proyect['nombre_proyecto'] . "'";
        } else {
          echo ",'" . $proyect['nombre_proyecto'] . "'";
        }
      }
      ?>],
          navigation: true,
          navigationPosition: 'right',
          navigationTooltips: [<?php
      $con = 2;
      foreach ($proyects as $proyect) {
        $con ++;
        if ($con == 1) {
          echo "'" . $proyect['nombre_proyecto'] . "'";
        } else {
          echo ",'" . $proyect['nombre_proyecto'] . "'";
        }
      }
      ?>],
      
      // afterRender: function () {
      //   //on page load, start the slideshow
      //   slideTimeout = setInterval(function () {
      //     $.fn.fullpage.moveSectionDown();
      //   }, 3000);
      // },
      //   onLeave: function (index, nextIndex, direction) {
      //   //after leaving section 1 (home) and going anywhere else, whether scrolling down to next section or clicking a nav link, this SHOULD stop the slideshow and allow you to navigate the site...but it does not
      //   if (index > 1 && direction == 'up') {
      //     // console.log('scrollUp');
      //     clearInterval(slideTimeout);
      //     slideTimeout = setInterval(function () {
      //       $.fn.fullpage.moveSectionDown();
      //     }, 3000);
      //   }
      //   else if (index > 1 && direction == 'down') {
      //     // console.log('scrollDown');
      //     clearInterval(slideTimeout);
      //     slideTimeout = setInterval(function () {
      //       $.fn.fullpage.moveSectionDown();
      //     }, 3000);
      //   }
      // }
    });

    //Script para aparecer foorter Home
    // console.log($(window).scrollTop());
    // $(".view_proyect").hover(function() {
    //     clearInterval(slideTimeout);
    //   }, function() {
    //      slideTimeout = setInterval(function () {
    //       $.fn.fullpage.moveSectionDown();
    //     }, 3000);
    //   }
    // );
  });



</script>
<style type="text/css" media="screen">
  footer{
    bottom: -100px;
    position: fixed;
  }
</style>
