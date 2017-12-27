<div class="login_zona">
  <div class="login_form">
    <span>
      Bienvenido a
    </span>
    <img src="<?php echo URL; ?>assets/img/logo.png" alt="Proksol">
    <i class="fa fa-times close_login"></i>
    <form action="<?php echo URL; ?>extranet/index.php" method="POST">
      <input type="text" placeholder="Usuario" name="nombre_usuario" id="nombre_usuario" />
      <input type="password" placeholder="Contraseña" name="pass_usuario" />
      <a href="javascript:void(0)" id="recorPass">Has olvidado tu contraseña</a> 
      <input type="submit" value="INICIAR SESIÓN" onclick="ga('send', 'event', 'Zona_clientes', 'Click', 'iniciar_sesion')" />
    </form>
  </div>
</div>
<style type="text/css">
  
  #cerrar{
    background: #52748a;
    border: none;
    color: #ffffff;
    width: 100px;
    height: 40px;
    font-family: 'bebas_neue_regularregular';
    font-size: 20px;
  }
  #msg{
    color: #d4d4d4;
    font-size: 17px;
    text-align: left;
  }
  #msg, #msg + div{ 
    box-sizing: border-box;
    width: 50%;
    float:left;
    padding-left: 10%;
  }
</style>
<script src="<?php echo URL; ?>js/blockUI.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    var alerta = function (mensaje) {
      $.blockUI({message: '<div id="msg">'+mensaje+'</div><div><button id="cerrar">aceptar</button></div>',
        css: {
          cursor: 'pointer',
          border: 'none',
          padding: '15px',
          backgroundColor: '#FFF',
          opacity: 1,
          color: '#000',
          'font-family': 'HelveticaNeueLTStd-Cn',
        }});
      $("#cerrar").click(function () {
        $.unblockUI();
      });
    };
    $("#recorPass").click(function () {
      var comprador = $("#nombre_usuario").val();

      if (comprador === "") {
        alerta("por favor ingrese su usuario");
      } else {
        $.ajax({
          url: "<?php echo URL; ?>extranet/recuperarPassword.php",
          method: "POST",
          data: {comprador: comprador}
        }).success(function (respuesta) {
          alerta(respuesta);
        });
      }
    });
  });
</script>


