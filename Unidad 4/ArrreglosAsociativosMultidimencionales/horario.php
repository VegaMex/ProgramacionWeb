<?php
    require("arraysasoc.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $asignatura = $_POST["asignatura"];
        echo "VENGO DEL POST " . $asignatura ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Horario</title>
</head>
<body>
<div class="container">
    <form action="horario.php" method="post">
        <div class="form-group">
            <label for="asignatura">Asignatura:</label>
            <input type="text" class="form-control" name="asignatura" id="asignatura">
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>Asignatura</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        </thead>
        <tbody>
        <?php
       // $horario = array_values($asignatura);
        foreach($horario as $asignatura => $horas){
            echo "<tr>";
            echo "<td>" . $asignatura . "</td>";
            foreach($horas as $valor){
                echo "<td>" . $valor . "</td>";
            }
            echo "<tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>