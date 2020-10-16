  <div class="container" style="max-width: 1400px; margin-bottom: 1%; margin-top: 25px">
    <div class="d-flex flex-wrap justify-content-center">
      <div class="text-center mb-3 textoLoc" style="position: relative; display: flex; flex-direction: column; width: 50%; margin-top: 12%; color: rgb(0, 84, 115)">
        <h2>Contacta con nosotros</h2>
        <hr class="mb-3" style="background-color: rgb(0, 84, 115); width: 50%">
        <h5 class="mt-3">Puedes contactar con nosotros a través del siguiente formulario, o si lo prefieres puedes
        contactar con nosotros a través nuestras redes sociales, estaremos encantados de atenderte.</h5>
        <div>
          <a href="https://www.facebook.com/apartamentos.marenostrum" class="mr-2" style="color: rgb(0, 84, 115)"><i class="fab fa-3x fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/apartamentos_mare_nostrum/" style="color: rgb(0, 84, 115)"><i class="fab fa-3x fa-instagram-square"></i></a>
        </div>
      </div>
      <div style="position: relative; display: flex; flex-direction: column; padding:2%">
        <img src="<?= asset_url('img/mockupFacebook-sinf.png') ?>" alt="MockupFB" id="mapa" style="width: 550px">
      </div>
    </div>
  </div>
  <div class="container text-center">
      <h3 class="mt-2" style="color: rgb(0, 84, 115)">Formulario de contacto</h3>
      <hr style="background-color: rgb(0, 84, 115); width: 30%">
      <form class="" action="index.html" method="post" >
        <div class="form-group justify-content-center formContact" style="background-color: rgb(238, 238, 238); padding: 50px; width:70%; margin: 6% auto; border-radius: 5px">
          <div class="inputBox">
            <div class="inputText">Nombre</div>
            <input id="nombre" type="text" name="nombre" class="input" required>
          </div>
          <div class="inputBox">
            <div class="inputText">Apellidos</div>
            <input id="apellidos" type="text" name="apellidos" class="input" required>
          </div>
          <div class="inputBox">
            <div class="inputText">Email</div>
            <input id="email" type="email" name="email" class="input" required>
          </div>
          <div class="inputBox">
            <div class="inputText">Mensaje</div>
            <textarea id="msg" name="msg" rows="1" class="input"></textarea>
          </div>
          <center><button type="submit" name="enviar" class="btn btn-buscar" ><i class="fas fa-paper-plane" aria-hidden="true"></i> &nbsp;Enviar </button></center>
        </div>
      </form>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function(){
  $("#nombre").focus(function() {
      $(this).parent().addClass("focus");
  });
  $("#apellidos").focus(function() {
      $(this).parent().addClass("focus");
  });
  $("#email").focus(function() {
      $(this).parent().addClass("focus");
  });
  $("#msg").focus(function() {
      $(this).parent().addClass("focus");
      $(this).addClass("textareaContact");
      this.rows=8;
  });
});
</script>

</body>
