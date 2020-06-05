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
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/panel.css">
    <title>Hello, world!</title>
  </head>
  <body>
  
   <?php 
  
   if (isset($_POST['Enviar']))          
   {
    $Titulo= $_POST["Titulo"];
    $Descripcion= $_POST["Descripcion"];
    $Precio= $_POST["Precio"];
    $img= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $ruta= $_FILES['imagen']['name'];
    $tipo= $_FILES['imagen']['type'];

  
    
     if ($img == !NULL){
     
      $extension_correcta = ($tipo == 'image/jpeg' or $tipo == 'image/jpg' or $tipo == 'image/png' or $tipo == 'image/gif');
      if ($extension_correcta){


       $oferta= mysqli_query($conexion,"INSERT INTO oferta (oferta, descripcion, precio, foto) VALUES ('$Titulo','$Descripcion','$Precio','$ruta')");
        if ($oferta){
        $move= move_uploaded_file($_FILES['imagen']['tmp_name'], "images/".$_FILES['imagen']['name']);
        echo "se guardo la oferta";
    }
      }
      else {
        echo "Error al guardar Promocion";
      }
    }else{
      echo "Error al guardar Promocion";
    } 
    }
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
        <input type="text" name="Titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="título">
       
      </div>
      <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="Descripcion" class="form-control" id="exampleInputPassword1" placeholder="Descripción">
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" class="form-control" id="exampleInputPassword1" placeholder="Precio">
      </div>
      <div class="form-group form-check">
        <label>Example file input</label>
        <input type="file" name="imagen" class="form-control-file">
      </div>
      <button type="submit" name="Enviar" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  </section>

  <section>
    <div class="lista">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Oferta</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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