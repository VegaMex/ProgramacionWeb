<?php 
    session_start();
    if(!isset($_SESSION["nombre"])){
        header("location: inicio.php");
    }     
    $nombre = $_SESSION["nombre"]; 
    $apellido = $_SESSION["apellido"];   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido <?php echo $nombre . " " . $apellido  ?></h1>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>