<?php
    //arraysasoc.php    

    //Arreglo asociativo
    // $arreglo = array(
    //     "asignatura" => "PW",
    //     "unidadI" => 100,
    //     "unidadII" => 90,
    //     "unidadIII" => 80
    // );

    // var_dump($arreglo);    
    // echo "<br>";
    // foreach($arreglo as $inidice => $valor) {
    //     echo $inidice . " : " . $valor;
    //     echo "<br>";
    // }

    // $arreglo["unidadIV"] = 90;

    // echo "<br>";
    // echo "Arreglo 2 <br>";
    // foreach($arreglo as $inidice => $valor) {
    //     echo $inidice . " : " . $valor;
    //     echo "<br>";
    // }

    $horario = array(
        'PW' => array(
            'Lunes' => "14:00 AT4",
            'Martes' => "14:00 B6",
            'Miercoles' => "14:00 AT4",
            'Jueves' => "14:00 B6",
            'Viernes' => "14:00 AT4",
        ),
        'Movil' => array(
            'Lunes' => "09:00 AT5",
            'Martes' => "14:00 AT5",
            'Miercoles' => "14:00 AT5",
            'Jueves' => "14:00 AT5",
            'Viernes' => "14:00 B5",
        ),
        'GPS' => array(
            'Lunes' => "13:00 AT4",
            'Martes' => "13:00 B6",
            'Miercoles' => "13:00 B6",
            'Jueves' => "13:00 B6",
            'Viernes' => "13:00 AT4",
        )
    );
    $horario["PWII"] = array(
        'Lunes' => "13:00 AT4",
        'Martes' => "13:00 B6",
        'Miercoles' => "13:00 B6",
        'Jueves' => "13:00 B6",
        'Viernes' => "13:00 AT4"
    );

    /* 
        Asignatura
        Lunes
        Martes
        Miércoles
        Jueves
        Viernes
    */
?>