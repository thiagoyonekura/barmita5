<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>
<body>
    <div>
    <?php include("menu-header.php"); ?>
    </div>
    <div>
        <?php
    
        include 'conectabanco.php';
       
     //$nome = $_SESSION['nome'];
     $datareserva = $_POST['datareserva'];
     $horario = $_POST['hora'];
     $qtdpessoa = $_POST['qtdpessoa'];
     $ocasiao = $_POST['ocasiao'];
     $cpf = $_SESSION['cpf'];
    if($datareserva != "" and $horario != "" and $qtdpessoa != ""){
        $sql = "INSERT INTO reserva (fk_cliente_cpf, datareserva, horario, qtdpessoa, ocasiao)
            VALUES ('$cpf','$datareserva','$horario','$qtdpessoa','$ocasiao')";
           // echo "$sql";
        $banco->query($sql);
        if($banco->affected_rows >= 1){
            //echo "Sua reserva foi realizada com sucesso!";
            header('Location: listareserva.php');
        }
    }else{
       echo "Erro ao inserir Cliente";
    } 

    $banco->close();    
            
        ?>
    </div>

</body>
</html>