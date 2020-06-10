<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <section id="contacto" class="pb-5">
      <h1 class="h1 pt-5">Contacto</h1>
      <hr class="my-3">
      <div class="contact-container p-2">
        <ul class="form-social-networks">
          <li>
            <i class="fab fa-instagram"></i>
            <span>@instagram/cakemascake</span>
          </li>
          <li>
            <i class="fab fa-facebook-square"></i>
            <span>/facebook/cakemascake</span>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <span>ventas@cakemascake.com</span>
          </li>
          <li>
            <i class="fas fa-home"></i>
            <span>Mendoza | Argentina</span>
          </li>
        </ul>

        <hr class="form-divition mx-2">

        <form action="enviar.php" class="p-2">
          <div class="input-container">
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text">
          </div>

          <div class="input-container">
            <label for="email">Email</label>
            <input name="email" type="email">
          </div>

          <div class="input-container">
            <label for="telefono">Teléfono</label>
            <input name="telefono" type="tel">
          </div>

          <div class="input-container">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje"></textarea>
          </div>
          <div class="input-container">
            <button type="submit">Enviar</button>
          </div>

        </form>
      </div>
      <div class="contact-overlay">
      </div>
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