
	<footer>
		<!-- Address Block -->

		<address>
			<b>Visítenos en:</b> Calle 97 Nº 23-60 Oficina 201 <b>PBX:</b> (57+1) 795 3010 Ext: 4181  <span><b>CEL:</b> <a href="tel:+573107888888">310 788 8888</a></span>
		</address>
		<!--  Social Block -->

		<div class="social_block">
			<p>Siguenos en:</p>
			<div class="icons">
				<!-- <a href="https://www.facebook.com/Proksol" target="_blank"><i class="fa fa-facebook"></i></a> -->
				<a href="https://www.youtube.com/user/ProksolConstructora" target="_blank"><i class="fa fa-youtube"></i></a>
				<a href="https://plus.google.com/+ProksolConstructora/posts" target="_blank"><i class="fa fa-google-plus"></i></a>	
			</div>
		</div>
		<!-- <div class="firma">
        <a href="http://coloralcuadrado.com/" target="_blank">
          <i class="icon-firma-color2"></i>
        </a>
      </div> -->
	</footer>




	<script type="text/javascript">

		$('header .login').click(function(e){
			e.preventDefault();

			$('.login_form').fadeToggle('slow');

		});


		$('.ico_menu').click(function(e){


			e.preventDefault();

			if($(this).hasClass( 'close' )) {

				$(this).removeClass('close').addClass('open');
				$(this).css("background-image", "url(<?php echo URL.'assets/img/close.png' ?>)");

				$('.header_menu').fadeIn(0).animate({left:'0'},200);


			}else {

				$(this).removeClass('open').addClass('close');
				$(this).css("background-image", "url(<?php echo URL.'assets/img/menu_ico.png' ?>)");
				$('.header_menu').animate({left:'-100%'}).fadeOut('fast');

			}

		});

		$('.responsive_select').change(function(e){

			e.preventDefault();

			var se = $(this).val();



			$('.tipo').fadeOut('slow');
			$('#tipo_'+se).fadeIn('slow');


		});

		$('.submenu > a').click(function(e){

			e.preventDefault();

			// $(this).parent().children('ul').toggle("clip",{direction: "vertical"}, 800);	
			$(this).parent().children('ul').fadeToggle('slow');

			if($(this).parent().children('ico_menu i').hasClass( 'fa-chevron-down' )) {

		
				$(this).parent().children('ico_menu i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
				


			}else {

				$(this).parent().children('ico_menu i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

			}

		});

	</script>	

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-42060383-8', 'auto');
		ga('send', 'pageview');

	</script>
	
	<noscript></noscript>

	</body>

</html>