<div class="row">
  
  <div class=col-md-12>
    <img src="images/prevenir/familia.jpg" style="max-width: 100%; padding-top: 50px; width: 100%;">
  </div>

</div>


<div class="contenido">


<div class="row"> 
    <div class=col-md-1></div>
    <div class="col-md-10"> 
      <h2 class="text-center tituloPrincipal">Galería</h2>
    </div>
    <div class=col-md-1></div>
  </div>
    <!-- Grid column -->
    <div class="col-md-12 d-flex justify-content-center mb-5">

      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Todos</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Publicidad</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Servicios Funerarios</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="3">Eventos</button>

    </div>
    <!-- Grid column -->

  </div>

  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="gallery" id="gallery">

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="./img/galeria/1.jpeg" alt="PrevenirPublicidad">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="./img/galeria/2.jpeg" alt="PrevenirPublicidad">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
         <img class="img-fluid" src="./img/galeria/3.jpeg" alt="PrevenirPublicidad">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="./img/galeria/4.jpeg" alt="PrevenirPublicidad">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
         <img class="img-fluid" src="./img/galeria/5.jpeg" alt="PrevenirPublicidad">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/6.jpeg" alt="PrevenirPublicidad">
        </div>


         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/7.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/8.jpeg" alt="PrevenirPublicidad">
        </div>


       <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/9.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/10.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/11.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/12.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/13.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 2">
         <img class="img-fluid" src="./img/galeria/14.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 3">
         <img class="img-fluid" src="./img/galeria/15.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 3">
         <img class="img-fluid" src="./img/galeria/16.jpeg" alt="PrevenirPublicidad">
        </div>

         <div class="mb-3 pics animation all 3">
         <img class="img-fluid" src="./img/galeria/17.jpeg" alt="PrevenirPublicidad">
        </div>

        <div class="mb-3 pics animation all 3">
         <img class="img-fluid" src="./img/galeria/18.jpeg" alt="PrevenirPublicidad">
        </div>

        <!-- Grid column -->

      </div>
      <!-- Grid row -->
    </div>
  </div>
  <div class="col-md-1">
  </div>
</div>
<!-- Grid row -->

<!-- Grid row -->






<style>
  .gallery {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    -moz-column-width: 33%;
    column-width: 33%; }
    .gallery .pics {
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease; }
      .gallery .animation {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1); }

        @media (max-width: 450px) {
          .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
            -webkit-column-width: 100%;
            -moz-column-width: 100%;
            column-width: 100%;
          }
        }

        @media (max-width: 400px) {
          .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
          }
        }
        Lightbox gallery 

      </style>

      <script type="text/javascript">
        $(function() {
          var selectedClass = "";
          $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
              $("."+selectedClass).fadeIn().addClass('animation');
              $("#gallery").fadeTo(300, 1);
            }, 300);
          });
        });
      </script>