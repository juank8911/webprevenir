
<nav class="navbar fixed-top justify-content-center navbar-expand-lg navbar-light bg-light ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="col-md-12">
      <div class="row">

        <div class="col-md-2 navPrimero">
         <img src="images/prevenir/logo.png" max-width="100%" width="300px" style="padding: 20px; display: block; margin: auto;" />
       </div>
       <div class="col-md-7" style="    padding-top: 4vw;">
        <ul class="navbar-nav nav justify-content-center mr-auto">
          <li class="menu nav-item" >
           <a href="#" class="menuItems active" onclick="cargaContenido('views/Paginas/inicio2.php');return false;">Inicio</a>
         </li>
         <li class="menu nav-item">
          <a href="#" class="menuItems" onclick="cargaContenido('views/Paginas/Quienes-Somos2.php');return false;">Quienes Somos</a>
        </li>
        <li class="menu nav-item">
         <a href="#" class="menuItems" onclick="cargaContenido('views/Paginas/Planes2.php');return false;">
          Planes
        </a>
       <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="menu nav-item ">
        <a href="#" class="menuItems" onclick="cargaContenido('views/Paginas/PQRS2.php');return false;">PQRS <span class="sr-only">(current)</span></a>
      </li>
      <li class="menu nav-item ">
        <a href="#" class="menuItems" onclick="cargaContenido('views/Paginas/Terminos2.php');return false;">Términos y Condiciones <span class="sr-only">(current)</span></a>
      </li>
    </ul></div>
    <div class="col-md-3 navSegundo">
      <div class="tituloHorario">Horario Oficinas Administrativas: </div><p style="text-align: center !important;">Lunes a Viernes 8am-12pm, 2pm-6pm / Sábados 8am-12pm</p>
      <div class="">ATENCIÓN AL CLIENTE </div>
      <a class="pr" href="callto:#"><div class="tituloHorario">(032) 7290038 - +57-3104351937</div></a>
    </div>

  </div>


</div>


</div>
</nav>

<script type="text/javascript">

  $(function() {

  // elementos de la lista
  var menues = $(".nav li a"); 

  // manejador de click sobre todos los elementos
  menues.click(function() {
     // eliminamos active de todos los elementos
     menues.removeClass("active");
     console.log("prueba");
     // activamos el elemento clicado.
     $(this).addClass("active");
   });

});
</script>
<style type="text/css">
  .active {
    color:#ffc705;
  }
</style>