<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>PLAN MASCOTAS</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="../../css/search.css">
    <link rel="stylesheet" href="../../css/vinetas.css">

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
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
       <div class="navbar-header">
          </div> 
             <div class="help-box text-right">
                    <div class="help-box text-right">
                        <span><a class="log">Horario:&nbsp;</a> </span>  Lun-vier 8am-12pm, 2pm-6pm &nbsp;/&nbsp; sab 8am-12pm
                    </div>
                        <p>Atencion al Cliente</p>
                        <a class="pr" href="callto:#">+57-3104351937</a>
             </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <?php include './nav.php'; ?>
            <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>
        </div>

      </div>  
    </header>
  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        
        <div class="container center991">
          <h2>
            Nuestros
            <small>
              Planes
            </small>
          </h2>
          <div class="row offs3">
<!--            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/page-4_img1.jpg" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    tumelit
                  </h3>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>-->
<!--            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/page-4_img2.jpg" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    Consequat ant
                  </h3>
                  <div class="wrap">
                    <p class="thumb_ins1">
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div> 
            </div>-->
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/prevenir/patriarca.png" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                       <small>Plan</small>
                    Patriarca 
                  </h3>
                  <div class="wrap">
                    <p>
                      Plan sin fecha de caducidad después de cancelado y transferible a criterio del comprador
                    </p>
                    <a href="patriarca.php" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/prevenir/individuallog.png" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                   <small>Plan</small>
                     Individual 
                  </h3>
                  <div class="wrap">
                    <p>
                      Plan anual para una persona, al mejor costo.
                    </p>
                    <a href="individual.php" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/prevenir/descuentos.png" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                      <small>Descuentos</small>
                      Medicos
                  </h3>
                  <div class="wrap">
                    <p>
                      Descuentos en servicios médicos, odontológicos, clínicos y de laboratorio.
                    </p>
                    <a href="descuento.php" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
          </div>

<!--          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/page-4_img6.jpg" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    Sit amet
                  </h3>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/page-4_img7.jpg" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    sectetuer 
                  </h3>
                  <div class="wrap">
                    <p class="thumb_ins1">
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div> 
            </div>
          </div>-->
        </div> 

      </section>
      
      <section class="well well2 bg1">
        <div class="container">
        <h2>
         <small>
           Plan
         </small>
            Mascotas

        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
                <h3>Servicios</h3>
                <br/>
                <ul class="rss">
                    <br>
                        <li>Retiro de la mascota en el lugar del fallecimiento (dentro del perímetro urbano).</li>
                        <li>Cremación y cofre para las cenizas.</li>
                        <li>Vehículo para acompañantes máximo cuatro personas en caso de entierro. “Opcional”</li>
                        <li>Este servicio es para perros, gatos</li>
                    <br>
                </ul>
                <br/>
                <br/>
            <div>
                <img src="../../images/prevenir/huellitas.png" style="width: 400px; height: 400px">
          </div>
              
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="../../images/prevenir/patita.jpg" >
                <br/>
                <br/>
                 <h3>Tramites</h3>
                 <br/>
                 <ul class="rss">
                    <br>
                    <li>Cementerio jardín de paz cielo animal Sana Sana o Cremación para la mascota.</li>
                        <li>El plan mascotas es un adicional al plan que el cliente escoja “NO se puede contratar solo el plan mascotas”.</li>
                        <li>Carencia de 90 días.</li>
                        <li>Manejo del Duelo</li>
                        <li>Carnet para citas veterinarias grátis (Por 1 Año)</li>
                        <li>Vacunación grátis (Por 1 Año)</li>
                    <br>
                </ul> 
            </div>
          </div>
        </div>
          
          <div style="background-color:#ec1c24; color: white; font-size:15px;height: 30px; padding-top: 0px;">
            <center>*Aplican Condiciones y Restricciones</center>
          </div>
          
      </section>

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
   <section class="well1">
      <div class="container"> 
            <p class="rights">
              COPYRIGHT © GRUPO PREVENIR EXPRESS | DESARROLLADO POR Securtec S.A.S &#169; <span id="copyright-year"></span>
              <a href="../terminos/condiciones.php">Privacy Policy</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>