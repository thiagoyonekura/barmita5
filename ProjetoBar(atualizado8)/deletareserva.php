<?php

if(!empty($_GET['idReserva'])){

    include('conectabanco.php');

    $idreserva = $_GET['idReserva'];

    $sqlSelect = "SELECT * FROM reserva WHERE idReserva = $idreserva";
    $resultado = $banco->query($sqlSelect);
    if($resultado->num_rows > 0){
        $sqlDelete = "DELETE FROM reserva WHERE idReserva = $idreserva";
    }
}


?>