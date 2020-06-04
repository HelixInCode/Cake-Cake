<?php include ('conexion.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cake + Cake</title>
  <!-- Cake + Cake icon -->

  <link rel="icon" href="img/backgrounds/cake+cake-icon.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!--Google Fonts Parisine-->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="body">
  <header id="header">
    <!-- NavBar Insertado por headerFooter.js -->
  </header>
  <main>
  <section id="promociones" class="pb-5 px-2">

      <h1>Promoción de la Semana</h1>
  <?php
      $consulta = mysqli_query ($conexion, "SELECT * FROM oferta ORDER BY idoferta DESC LIMIT 3");
      $totaloferta = mysqli_num_rows ($consulta);
      
      if ($totaloferta > 0){
         while ($oferta = mysqli_fetch_array($consulta)){ 
         $foto = $oferta ['foto'];
         
          echo '
        
         <div class="contenedor-promo">
        <div class="img-promo">
          <img class="img-fluid" src="images/'.$foto.'" alt="">
        </div>
        <div class="descripcion-promo">
          <h3 class="titulos">'.$oferta['oferta'].'</h3>
          <p class="promo">'.$oferta['descripcion'].'</p>
          <span class="precio">'.$oferta['precio'].'</span>
        </div>
      </div>';

    }
  }else {
    echo '<h3 class="titulos">No hay ofertas por ahora</h3>';

  }
  ?>
  </section>

  </main>
  <footer id="footer" class="page-footer">
    <!-- Footer Insertado por headerFooter.js -->
  </footer>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript" src="js/headerFooter.js"></script>
  <script type="text/javascript" src="js/navHamburger.js"></script>

</body>
</html>
