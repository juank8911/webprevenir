<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Todos</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Instalaciones</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Fachada</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./img/1.jpeg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/2.jpeg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/3.jpeg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./img/4.jpeg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="./img/5.jpeg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/6.jpeg" alt="Card image cap">
  </div>

  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/7.jpeg" alt="Card image cap">
  </div>

  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/8.jpeg" alt="Card image cap">
  </div>

  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/9.jpeg" alt="Card image cap">
  </div>

  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/10.jpeg" alt="Card image cap">
  </div>

  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="./img/11.jpeg" alt="Card image cap">
  </div>

  <!-- Grid column -->

</div>
<!-- Grid row -->

<link rel="stylesheet" href="./css/galeria.css">



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
