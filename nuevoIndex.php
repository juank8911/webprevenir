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
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Grupo Prevenir Express</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Links -->
    <link rel="stylesheet" href="css/flotante.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/vinetas.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/total.css">
    <link rel="stylesheet" href="css/styleNav.css">

 


    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <script src='js/device.min.js'></script>
    <meta name="keywords"
    content="funeraria,pre exequial,servicio de funeraria,funerarias pasto,cremacion,entierro,entierro mascotas, servicio medico, servicio de funeraria pasto">

  </head>
  <body>



    <!-- Header -->

    <header class="container-fluid">
        <?php include './modalInicio.php';?>
      <?php include './nuevoNav.php'; ?>
    </header> 

    <!-- /Header -->


    <!-- Content -->

    <div class="container-fluid" id="contenidos"> 
      
    </div>


    <!--/ Content -->

    <!-- Footer -->


    <footer class="page-footer font-small blue pt-4">
     <div class="container-fluid text-center text-md-left footerNew">
       <div class="footer-copyright text-center py-3">© 2019 Copyright: Grupo Prevenir Express | DESARROLLADO POR Securtec S.A.S
        <a href="../terminos/condiciones.php"> Privacy Policy</a>
      </div>
    </div>

  </footer>

  <!-- /Footer -->


</body>
</html>

<?php if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. ?>
  <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#modalInicio").modal("show");
  });
 </script>
  <?php endif; ?>

  <script> $(document).ready(function(){
$('#contenidos').load('views/Paginas/inicio2.php')
    });
  </script>
  

<script type="text/javascript">
  function cargaContenido(pag)
  {
    console.log('prueba');
      // $('html, body').animate({scrollTop:0}, 'slow');
      $('#contenidos').load(pag);
    }

  </script>

  
