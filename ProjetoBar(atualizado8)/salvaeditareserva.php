<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reservas</title>
</head>
<body>
<div>
    <?php include("menu-header.php"); ?>
    </div>
<div>
<?php
include('conectabanco.php');

$update= $_POST['update'];
//echo $update;
if(isset($update)){
    //echo "Teste";
    $idreserva = $_POST['idReserva'];
    $datareserva = $_POST['dataReserva'];
    $horario = $_POST['hora'];
    $qtdpessoa = $_POST['qtdPessoa'];
    $ocasiao = $_POST['ocasiao'];
    $situacao = $_POST['situacao'];
    $cpf = $_SESSION['cpf'];

    $sqlUpdate = "UPDATE reserva SET dataReserva = '$datareserva', horario = '$horario', qtdPessoa = '$qtdpessoa',
     ocasiao = '$ocasiao', situacao = '$situacao', fk_cliente_cpf = '$cpf' WHERE idReserva = '$idreserva'";
    echo $sqlUpdate;
    $resultado = $banco->query($sqlUpdate);
    echo $resultado;
}
    header('Location: listareserva.php');

?>
</div>
</body>
</html>