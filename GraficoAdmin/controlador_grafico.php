<?php
    require 'modelo_grafico';

    $MG = new modelo_grafico();
    $consulta = $MG->TraerGraficas();
    echo json_encode($consulta);
?>