<?php include('conexion.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta chars
    et="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lgn.css">
    <title>Cake+Cake</title>
  </head>
  <body>
     <?php
   if (isset($_POST['Enviar'])) 
   {
       $nombre = mysqli_real_escape_string($conexion,$_POST['username']);
       $clave = mysqli_real_escape_string($conexion,$_POST['password']);
       $email = mysqli_real_escape_string($conexion,$_POST['mail']);

    $sql = mysqli_query($conexion, "SELECT email FROM user WHERE email='".$email."'");
    if (mysqli_num_rows($sql)>0) 
    {?> 
    <div>El correo de usuario elegido ya existe</div>
    <?php }
     
     else {$clave = crypt($clave, "pass");
           $reg = mysqli_query($conexion, "INSERT INTO user (nombre, email, clave) VALUES ('$nombre','$email','$clave')") or die(mysqli_error($conexion));
        if ($reg) {
            ?>
            <div>Usuario creado correctamente</div>
            <meta http-equiv="Refresh" content="2" url="lgn.php" />
        <?php }
    else {
        ?>
    
    <div>Error al guardar los datos</div>
    <?php
    }
   } 
     
    }
   ?>   
  <div id="login">
        <h3 class="text-center letra pt-5">Cake + Cake</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Registro</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mail" class="text-info">Mail:</label><br>
                                <input type="mail" name="mail" id="mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <
                            <div class="form-group">

                        

                                
                                <input type="submit" name="Enviar" class="btn btn-info btn-md" value="Enviar">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>