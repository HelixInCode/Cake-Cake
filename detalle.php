<?php

include ('conexion.php');
session_start();
if(isset($_SESSION['nombre'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  <link rel="stylesheet" href="css/bootstrap2.min.css">
  
  
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/panel.css">
    <title>Hello, world!</title>
  </head>
  <body>
  
   <?php 
    
    $idoferta = $_REQUEST['idoferta'];
    if (isset($_POST['Enviar'])){
        mysqli_query($conexion, "UPDATE oferta SET oferta = '$_POST[Titulo]', descripcion = '$_POST[Descripcion]', precio = '$_POST[Precio]' WHERE idoferta = '$idoferta' ")or die("problemas actualizando".mysqli_error($conexion));
        echo '<div class="alert alert-primary" role="alert">   Oferta actualizada correctamente!! </div>';
    }
    $traeroferta = mysqli_query($conexion, "SELECT * FROM oferta WHERE idoferta = '$idoferta'")or die(mysqli_error($conexion));
    $arrayoferta = mysqli_fetch_array($traeroferta);

   ?>
   <div>
    <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Guardar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Modificar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Borrar</a>
    </li>
    
    </ul>
    <section id="Guardar Ofertas">
    <h3>Panel de Ofertas</h3>
        <div class="pb-5">
          <form  class="home" action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Título</label>
        <input type="text" name="Titulo" value="<?php echo $arrayoferta['oferta'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="título">
       
      </div>
      <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="Descripcion" value="<?php echo $arrayoferta['descripcion'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Descripción">
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" value="<?php echo $arrayoferta['precio'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Precio">
      </div>
     
      <button type="submit" name="Enviar" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
    <a href= "home.php"> <button type="submit" name="Volver" class="btn btn-primary">Volver</button></a>
  </div>
  </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    }  else {
        header ("Location: lgn.php");
    }
?>