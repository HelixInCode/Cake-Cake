<?php
include ('conexion.php');

$idoferta = $_REQUEST['idoferta'];
mysqli_query($conexion, "DELETE FROM oferta WHERE idoferta = '$idoferta'") or die (mysqli_error($conexion));
header('Location: home.php');

?>