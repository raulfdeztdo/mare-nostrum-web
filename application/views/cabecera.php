<body>
  <nav class="nav">
          <div class="container">
              <div class="logo">
                  <a href="#"><img id="imgCabecera" src="<?= asset_url('img/logo-solo.png') ?>" ></a>
              </div>
              <div class="tituloCab">
                <a href="#"><h2 class="text-white" id="tituloCabecera"> Mare Nostrum </h2></a>
              </div>
              <div id="mainListDiv" class="main_list">
                  <ul class="navlinks">
                      <li><a href="#">Sobre nosotros</a></li>
                      <li><a href="#">Apartamentos</a></li>
                      <li><a href="#">Localización</a></li>
                      <li><a href="#">Contacto</a></li>
                  </ul>
              </div>
              <span class="navTrigger">
                  <i></i>
                  <i></i>
                  <i></i>
              </span>
          </div>
      </nav>
      <section class="home">
      </section>


  <!-- Function used to shrink nav bar removing paddings and adding black background -->
      <script>
          $(window).scroll(function() {
              if ($(window).scrollTop() > 255) {
                  $('#imgCabecera').addClass('resizeImg');
                  $('.main_list').addClass('moveRight');
                  $('.nav').addClass('affix');
                  $('#tituloCabecera').fadeOut("fast");
                  $('.logo-solo').fadeIn();
                  if ($( document ).width() < 1000){
                    $('.nav div.main_list ul').addClass('marginTopMenu');
                  }
              } else {
                  $('#imgCabecera').removeClass('resizeImg');
                  $('.main_list').removeClass('moveRight');
                  $('.nav').removeClass('affix');
                  $('#tituloCabecera').fadeIn();
                  $('.logo-solo').fadeOut();
                  if ($( document ).width() < 1000){
                    $('.nav div.main_list ul').removeClass('marginTopMenu');
                  }
              }
              console.log($(window).scrollTop());
          });
          $('.navTrigger').click(function () {
              $(this).toggleClass('active');
              console.log("Clicked menu");
              $("#mainListDiv").toggleClass("show_list");
              $("#mainListDiv").fadeIn();

          });
      </script>
     </body>
  </html>
