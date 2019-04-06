<?php
  # Iniciando la variable de control que permitirá mostrar o no el modal
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {
    # Caso no exista la cookie entra aquí
    # Creamos la cookie con la duración que queramos

    //$expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    $expirar = 600; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Grupo Prevenir Express</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/flotante.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/vinetas.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/total.css">



    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
    <meta name="keywords"
            content="funeraria,pre exequial,servicio de funeraria,funerarias pasto,cremacion,entierro,entierro mascotas, servicio medico, servicio de funeraria pasto">

  </head>
  <body>

       <?php include './modalInicio.php';?>

  <!--========================================================
                            HEADER
  =========================================================-->
   <div class="page">
    <header class="headerIn">

      <div class="container top-sect">

        <div class="navbar-header">
          <!-- <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./"><small>Grupo</small>Prevenir<small>Express</small></a>
          </h1> -->
          <img src="images/prevenir/logo.png" width="100%" height="100%" />

          <a class="search-form_toggle" href="#"></a>

        </div>



        <div class="help-box text-right">
                    <div class="help-box text-right">
                        <span><a class="log">Horario:&nbsp;</a> </span>  Lun-vier 8am-12pm, 2pm-6pm &nbsp;/&nbsp; sab 8am-12pm
            <!--<a href="#" class="log"> <i class="fa fa-user"/>  <span class="hidden-xs" style="color: #00afef;">Ingreso</span> <span style="color: #999; font-size: 20px;"> | </span> </a>-->
                       <!-- <a class="log" href="#"><i class="fa fa-user"></i> Inicio </a><span style="color: #999; font-size: 20px;"> | </span>
                        <a class="log" href="#"><i class="fa fa-users"></i> Registro </a> <span style="color: #999; font-size: 20px;"> | </span>
                        <a class="log" href="#"><i class="fa fa-file-text-o"></i></i> Publicar</a> -->

        </div>
          <p>Atencion al Cliente</p>
          <a class="pr" href="callto:#">+57-3104351937</a>
          <!-- <h4>314-752-8128</h4>
          <h4>315-259-7888</h4>
          <h4>317-282-9124</h4> -->


        </div>

      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">
            <?php include './nav.php'; ?>
        </div>

      </div>
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <main class="mainIn" id="mainIn">
       <section class="well well1 well1_ins1">
            <?php include 'banner.html'; ?>
      </section>

      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
          <h3 class="txt-pr">
            BIENVENIDO
            <small>
              A SU EMPRESA DE PREVISION EXEQUIAL!
            </small>
          </h3>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <a><h6>Mision</h6></a>
                <p>
                Con nuestra calidad en el servicio y conscientes del valor supremo de las personas, nuestros clientes nos entregan su confianza para cuando llegue el día de la pérdida de un ser querido,
              </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <a><h6>Vision</h6></a>
              <p>
                Que todo integrante de cada núcleo familiar esté protegido con nuestro plan de previsión funeraria así dar tranquilidad a los hogares colombianos.
                <!-- <a href="#" class="btn-link l-h1 fa-angle-right"></a> -->
              </p>
            </div>
          </div>
          <div class="row">

          <a><h6>Quienes Somos</h6></a>
        <p>
            GRUPO PREVENIR EXPRESS S.A.S. Somos una Corporación especializada en planes de Previsión Funeraria, individuales y
             masivos de las más prestigiosas empresas del sector público y privado. GRUPO PREVENIR EXPRESS SAS. Nació con el objetivo
              de desarrollar y promover la importancia de la Previsión Funeraria en Colombia.
        </p>
      </br>
          <h4 style="text-align: center;">PARA NOSOTROS SU TRANQUILIDAD ES LO MÁS IMPORTANTE.</h4>
          </div>
        </div>
      </section>

      <section class="well well2">
        <div class="container">
          <h2>
            Planes para
            <small>
              nuestros clientes
            </small>
          </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                    <a href="#" onclick="cargaContenido('views/planes/descuentospr.php');return false;">PREVENIR DESCUENTOS MEDICOS</a>

                    <a href="#" onclick="cargaContenido('views/planes/descuentospr.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#" onclick="cargaContenido('views/planes/individuallibra.php');return false;">PLAN INDIVIDUAL LIBRANZA</a>

                  <a href="#" onclick="cargaContenido('views/planes/individuallibra.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                  <li style="display: block">

                      <a href="#" onclick="cargaContenido('views/planes/individual.php');return false;">PLAN INDIVIDUAL VENTANILLA</a>

                    <a hre="#" onclick="cargaContenido('views/planes/individual.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#" onclick="cargaContenido('views/planes/patriarcapr.php');return false;">PLAN PATRIARCA</a>

                  <a href="#" onclick="cargaContenido('views/planes/patriarcapr.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#" onclick="cargaContenido('views/planes/mascotapr.php');return false;">PLAN PELUDITOS</a>

                  <a href="#" onclick="cargaContenido('views/planes/mascotapr.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>

                <li>

                  <a href="#" onclick="cargaContenido('views/planes/generallibranza.php');return false;">PLAN GERENCIAL LIBRANZA</a>

                  <a href="#" onclick="cargaContenido('views/planes/generallibranza.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#" onclick="cargaContenido('views/planes/basicoLibranza.php');return false;">PLAN BASICO LIBRANZA</a>

                  <a href="#" onclick="cargaContenido('views/planes/basicoLibranza.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#" onclick="cargaContenido('views/planes/vehiculo.php');return false;">PLAN VEHICULAR</a>

                  <a href="#" onclick="cargaContenido('views/planes/vehiculo.php');return false;" class="btn-link l-h1 fa-angle-right"></a>
                </li>
              </ul>
            </div>
              <div class="col-md-6 col-sm-12" id="contenidos">
                <img class="width_img" src="images/prevenir/viejitos.jpg" alt="" height="50%">
            </div>
          </div>
        </div>

      </section>

      <section class="well well2">
        <div class="container">
          <h2>
            Nuestros
            <small>
              servicios
            </small>
          </h2>
          <div class="row offs1">
           <div class="col-md-6 col-sm-12">
                <h3>Servicios funerarios</h3>
                <br/>
                <p><span class="glyphicon glyphicon-star"></span> Trámites legales y notariales.</p>
                <p><span class="glyphicon glyphicon-star"></span> Traslado del cuerpo dentro del municipio.</p>
                <p><span class="glyphicon glyphicon-star"></span> Preparación y conservación del cuerpo.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cofre fúnebre (2 referencias).</p>
                <p><span class="glyphicon glyphicon-star"></span> Sala de velación por 24 horas.</p>
                <p><span class="glyphicon glyphicon-star"></span> Serie de carteles, Arreglo floral.</p>
                <p><span class="glyphicon glyphicon-star"></span> Suministro de libro recordatorio de firmas de asistentes.</p>
                <p><span class="glyphicon glyphicon-star"></span> Rosario y guía para oración.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cinta impresa con el nombre de la persona fallecida.</p>
                <p><span class="glyphicon glyphicon-star"></span> Traslado del cuerpo al sitio de velación y ceremonia en carroza fúnebre.</p>
                <p><span class="glyphicon glyphicon-star"></span> Servicio de cafetería personalizado.</p>
                <p><span class="glyphicon glyphicon-star"></span> Ceremonia Religiosa (cualquier credo).</p>
                <p><span class="glyphicon glyphicon-star"></span> Vehículo privado para transporte de acompañantes Para cabecera municipal 25 pasajeros.</p>
                <br/>
                <br/>
                <img src="images/prevenir/ultimaMorada.jpg">

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="images/prevenir/cofre.jpg">
                <br/>
                <br/>
                 <h3>Servicios Finales o Cementerio</h3>
                 <br/>
              <p><span class="glyphicon glyphicon-star"></span> Bóveda o lote en uso temporal y Osario.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cremación y cofre cenízario.</p>
                <p><span class="glyphicon glyphicon-star"></span> *Traslado aéreo y/o terrestre para el cuerpo de la persona fallecida.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cementerios Distritales, Municipales o parque cementerio</p>
                <p><span class="glyphicon glyphicon-star"></span> *Carencias 72 horas para muerte accidental, 60 días para muerte natural y 180 días para enfermedades pre existentes.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cubrimiento del 100% de los servicios funerarios y cementerios.</p>
                <p><span class="glyphicon glyphicon-star"></span> Cubrimiento a nivel nacional..</p>
                <p><span class="glyphicon glyphicon-star"></span> Carné informativo entregado en el momento de la vinculación con las líneas emergencia funeraria.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="well well3 parallax" > -->
<!--        <div class="container">
          <div class="wrap text-center">
            <strong>
              SAVE TIME,
              <br /> SAVE MONEY,
              <small>
                GROW & SUCCEED
              </small>
            </strong>
            <p>
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <a href="#" class="btn btn-primary">read more
              <span class="fa-angle-right"></span>
            </a>
          </div>
        </div>-->

        <!-- <iframe width="100%" height="550px" src="https://www.youtube.com/embed/flgxrK12UbA?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"
                frameborder="0" allowfullscreen style="width: 50%; margin: 0 25%; margin-top: -76px; margin-bottom: -82px;"> </iframe>
      </section> -->

    <!--  <section class="well well2">
        <div class="container">
          <h2>
            NUESTROS
            <small>
              CONVENIOS
            </small>
          </h2>

          <div class="row offs1">
            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img7.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img8.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img9.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img10.jpg" alt="">
                </a>
              </li>
            </ul>

            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img11.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img12.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img13.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="images/page-1_img14.jpg" alt="">
                </a>
              </li>
            </ul>
          </div>

        </div>
      </section> -->
  </main>

  <div class="contenedor">
<button class="botonF1">
<span>+</span>
</button>
<button class="btn btns botonF2" onclick="cargaContenido('views/pqrs/index.php')" ><span>+</span></button>
<button class="btn btns botonF3">
<span>+</span>
</button>
<button class="btn btns botonF4">
<span>+</span>
</button>
<button class="btn btns botonF5">
<span>+</span>
</button>
</div>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">

    <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.922102507338!2d-77.28104798538601!3d1.2144397991142004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed4843b962d11%3A0xc8a238df423fb217!2sGrupo+Prevenir+Express!5e0!3m2!1ses!2sco!4v1530623372431" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<!--      <div id="google-map" class="map_model" data-zoom="5"></div>
      <ul class="map_locations">
        <li data-x="1.2144182" data-y="-77.27865039999999" data-basic="images/gmap_marker.png" data-active="images/gmap_marker_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              BUSINESS
              <small>
                COMPANY
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>-->
<!--        <li data-x="-74.100000" data-y="40.643180" data-basic="images/gmap_marker2.png" data-active="images/gmap_marker2_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>-->
<!--        <li data-x="-73.8854068" data-y="40.693180" data-basic="images/gmap_marker3.png" data-active="images/gmap_marker3_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>-->
<!--        <li data-x="-73.7874068" data-y="40.613180" data-basic="images/gmap_marker4.png" data-active="images/gmap_marker4_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>-->
<!--        <li data-x="-74.200000" data-y="40.683180" data-basic="images/gmap_marker5.png" data-active="images/gmap_marker5_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>-->
      <!--</ul>-->
    <!-- </div> -->

    <section class="well well2">
           <div class="container">
            <p class="rights">
              COPYRIGHT © GRUPO PREVENIR EXPRESS | DESARROLLADO POR Securtec S.A.S &#169; <span id="copyright-year"></span>
              <a href="../terminos/condiciones.php">Privacy Policy</a>
            </p>
      </div>
            <div class="text-text-right" >
                <div class="text-right" >
                <!-- <div class="center767"><a href="https://play.google.com/store/apps/details?id=com.ionicframework.mobile573328 "><img src="images/prevenir/store.png" width="200px" height="100px"></a> <a href=""><img src="images/prevenir/apple.png" width="200px" height="100px"></a>  </div> -->
            </div>
            </div>
    </section>
  </footer>
  </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>
  <!-- </script> -->
<?php if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. ?>
  <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#modalInicio").modal("show");
  });
 </script>
  <?php endif; ?>
 <script>

  function cargaContenido(pag)
  {
      console.log('prueba');
      // $('html, body').animate({scrollTop:0}, 'slow');
    $('#contenidos').load(pag);
  }

  $('.botonF1').hover(function(){
  $('.btns').addClass('animacionVer');
})
$('.contenedor').mouseleave(function(){
  $('.btns').removeClass('animacionVer');
})

 </script>

  </body>
</html>
