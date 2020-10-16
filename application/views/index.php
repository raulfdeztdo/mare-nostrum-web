<div class="jumbotron text-white" style="background-color: #005473; border-radius: 0">
  <div class="row">
    <div id="formFechas" class="col-12 form-inline justify-content-center">
      <div class="imgForm text-white text-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(<?= asset_url('img/fotosApartamentos/render2-form.png') ?>); height: 300px; width: 550px">
          <h3 style="margin-top: 25%; margin-bottom: 25%">Comprueba la disponibilidad de nuestros apartamentos</h3>
      </div>
      <div class="pl-3" style="background-color: rgb(202, 222, 228); height: 300px; width: 550px">
        <form class="" action="index.html" method="post">
          <div class="form-group justify-content-center" style="margin-top: 14%; margin-bottom: 25%">
            <div class="row" style="width: 100%">
              <div class="col-7">
                <div class="inputBox ml-4">
                  <div class="inputText">Desde</div>
                  <input id="fecha1" type="text" name="fecha1" class="input" required>
                </div>
                <div class="inputBox ml-4">
                  <div class="inputText">Hasta</div>
                  <input id="fecha2" type="text" name="fecha2" class="input" required>
                </div>
              </div>
              <div class="col-5" >
                <center><button type="submit" name="buscar" class="btn btn-buscar" ><i class="fa fa-search" aria-hidden="true"></i> &nbsp;Buscar </button></center>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <div class="container" style="max-width: 1400px; margin-bottom: 2%">
    <div class="row justify-content-center">
        <div class="card mr-4 mt-2" style="max-width: 300px">
          <div class="card-header" style="padding: 0">
            <div id="Ap1" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#Ap1" data-slide-to="0" class="active"></li>
              <li data-target="#Ap1" data-slide-to="1"></li>
              <li data-target="#Ap1" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="max-width: 300px">
              <div class="carousel-item active">
                <img src="<?= asset_url('img/fotosApartamentos/ap1-1.jpg') ?>" alt="ap1-1" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap1-2.jpg') ?>" alt="ap1-2" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap1-3.jpg') ?>" alt="ap1-3" width="300px" height="220px">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#Ap1" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#Ap1" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            </div>
          </div>
          <div class="card-body">
            <h4>Apartamento 1</h4>
            <div class="p-1" style="font-size: 16px">
              <p><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;2 dormitorios</p>
              <p><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;1 cuarto de baño</p>
            </div>
          </div>
          <div class="card-footer">
            <h4 style="position: absolute; font-weight: bold">45€ / noche</h4>
            <button type="button" name="ap1" class="btn float-right" style="border-bottom: 1px solid darkgray"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalles</button>
          </div>
        </div>
        <div class="card mr-4 mt-2" style="max-width: 300px">
          <div class="card-header" style="padding: 0">
            <div id="Ap2" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#Ap2" data-slide-to="0" class="active"></li>
              <li data-target="#Ap2" data-slide-to="1"></li>
              <li data-target="#Ap2" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" style="max-width: 300px">
              <div class="carousel-item active">
                <img src="<?= asset_url('img/fotosApartamentos/ap2-1.jpg') ?>" alt="ap2-1" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap2-2.jpg') ?>" alt="ap2-2" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap2-3.jpg') ?>" alt="ap2-3" width="300px" height="220px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Ap2" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#Ap2" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            </div>
          </div>
          <div class="card-body">
            <h4>Apartamento 2</h4>
            <div class="p-1" style="font-size: 16px">
              <p><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;2 dormitorios</p>
              <p><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;2 cuartos de baño</p>
            </div>
          </div>
          <div class="card-footer">
            <h4 style="position: absolute; font-weight: bold">47€ / noche</h4>
            <button type="button" name="ap2" class="btn float-right" style="border-bottom: 1px solid darkgray"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalles</button>
          </div>
        </div>
        <div class="card mr-4 mt-2" style="max-width: 300px">
          <div class="card-header" style="padding: 0">
            <div id="Ap3" class="carousel slide" data-ride="carousel4">
            <ul class="carousel-indicators">
              <li data-target="#Ap3" data-slide-to="9" class="active"></li>
              <li data-target="#Ap3" data-slide-to="10"></li>
              <li data-target="#Ap3" data-slide-to="11"></li>
            </ul>
            <div class="carousel-inner" style="max-width: 300px">
              <div class="carousel-item active">
                <img src="<?= asset_url('img/fotosApartamentos/ap3-1.jpg') ?>" alt="ap3-1" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap3-2.jpg') ?>" alt="ap3-2" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap3-3.jpg') ?>" alt="ap3-3" width="300px" height="220px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Ap3" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#Ap3" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            </div>
          </div>
          <div class="card-body">
            <h4>Apartamento 3</h4>
            <div class="p-1" style="font-size: 16px">
              <p><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;3 dormitorios</p>
              <p><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;2 cuartos de baño</p>
            </div>
          </div>
          <div class="card-footer">
            <h4 style="position: absolute; font-weight: bold">52€ / noche</h4>
            <button type="button" name="ap3" class="btn float-right" style="border-bottom: 1px solid darkgray"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalles</button>
          </div>
        </div>
        <div class="card mr-4 mt-2" style="max-width: 300px">
          <div class="card-header" style="padding: 0">
            <div id="Ap4" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#Ap4" data-slide-to="0" class="active"></li>
              <li data-target="#Ap4" data-slide-to="1"></li>
              <li data-target="#Ap4" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" style="max-width: 300px">
              <div class="carousel-item active">
                <img src="<?= asset_url('img/fotosApartamentos/ap4-1.jpg') ?>" alt="ap4-1" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap4-2.jpg') ?>" alt="ap4-2" width="300px" height="220px">
              </div>
              <div class="carousel-item">
                <img src="<?= asset_url('img/fotosApartamentos/ap4-3.jpg') ?>" alt="ap4-3" width="300px" height="220px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Ap4" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#Ap4" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            </div>
          </div>
          <div class="card-body">
            <h4>Apartamento 4</h4>
            <div class="p-1" style="font-size: 16px">
              <p><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;2 dormitorios</p>
              <p><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;1 cuarto de baño</p>
            </div>
          </div>
          <div class="card-footer">
            <h4 style="position: absolute; font-weight: bold">41€ / noche</h4>
            <button type="button" name="ap4" class="btn float-right" style="border-bottom: 1px solid darkgray"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalles</button>
          </div>
        </div>
    </div>
    <br>
    <div class="float-right" style="width:100%">
        <button type="button" name="vermas" class="btn float-right" style="border-bottom: 1px solid darkgray; font-size:18px"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Ver más</button>
    </div>
  </div>
  <div class="jumbotron" style="background-color: rgb(202, 222, 228);border-radius: 0">
    <div class="row justify-content-center">
        <div style="position: relative; display: flex; flex-direction: column">
          <center><img src="<?= asset_url('img/mockupRRSS-sinf.png') ?>" alt="" style="width: 65%"></center>
        </div>
        <div class="text-center" style="position: relative; flex-direction: column; color: rgb(0, 84, 115); margin-top: 3%; width: 50%">
          <h2>Contacta con nosotros</h2>
          <hr style="background-color: rgb(0, 84, 115); width: 50%;"><br>
          <h5>Puedes contactar con nosotros a través del <a href="<?php echo base_url().'Otros/contacto' ?>" style="color: rgb(0, 84, 115)"><b>formulario de contacto</b></a>, del formulario de contacto del aparamento que te guste o si lo prefieres puedes contactar con nosotros a través de nuestras redes sociales</h5>
          <a href="https://www.facebook.com/apartamentos.marenostrum" class="mr-3" style="color: rgb(0, 84, 115)"><i class="fab fa-4x fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/apartamentos_mare_nostrum/" style="color: rgb(0, 84, 115)"><i class="fab fa-4x fa-instagram-square"></i></a>
        </div>
    </div>
  </div>
<script type="text/javascript">

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

today = yyyy+'-'+mm+'-'+dd;

document.getElementById("fecha1").setAttribute("min", today);
document.getElementById("fecha2").setAttribute("min", today);
  $("#fecha1").focus(function() {
	 		$(this).parent().addClass("focus");
      $(this).attr('type', 'date');
	})
  $("#fecha2").focus(function() {
	 		$(this).parent().addClass("focus");
      $(this).attr('type', 'date');
	})
  $( document ).ready(function() {
    console.log( "ready!" );
  });
</script>

</body>
