<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>PLAN PATRIARCA</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="../../css/search.css">

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
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                  <img src="../../images/prevenir/mascotas.png" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                      <small>Plan</small>
                      Mascotas
                  </h3>
                  <div class="wrap">
                    <p>
                        El mejor descanso para el integrente peludo de la familia.
                    </p>
                    <a href="mascota.php" class="btn-link fa-angle-right"></a>
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
          </small> Patriarca 
          
        </h2>
            
                  
              <div style="background-color:#00adef; color: white; height: 228px; padding: 26px;">
            <center><h4 style="color: white" class="section-text">Opcion 1-Titular + 11 Beneficiarios (previamente inscritos)</h4><br>
                    4 sin límite de edad: titular, padres, suegros y cónyuge.<br>
                    Beneficiarios restantes menores de 65 años hasta tercer grado de consanguinidad y afinidad:<br>
                    (hijos, hermanos, primos, nietos, tios, sobrinos, cuñados, nueras, yernos, padrastros, hijastros, hermanastros, ex-esposo(a)), “uno con máximo de edad de 74 años y 90 dias de carencia”.<br>
                    * Todos los beneficiaros mayores a 65 años, 90 días de carencia.
  
            </center>
            </div>
          <br/>
          <br/>
          
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

              
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="../../images/prevenir/cofre.jpg">
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
          <br/>
          <br/>

      <div style="background-color:#00adef; color: white; height: 100px; padding: 26px;">
          <center> $ 1.980.000 =
                Plan sin fecha de caducidad después de cancelado y transferible a criterio del comprador 
                Si el comprador quiere hacer uso del servicio antes de cancelar al 100% del valor solo pagaría el saldo pendiente en el momento de activar el servicio.
        </center>
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