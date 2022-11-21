<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa</title>
</head>
<body>
    <div>
    <?php include("menu-header2.php"); ?>
    
    </div>
    <div>
        <?php
    
        include 'conectabanco.php';
        error_reporting(0);
       
     $cadeira = $_POST['cadeira'];
     $mesa = $_POST['mesa'];
     $local = $_POST['local'];
     $situacao = $_POST['situacao'];
     $registro = $_POST['registro'];
    if($cadeira != "" and $mesa != "" and $local != "" and $situacao != "" and $registro != ""){
        $sql = "INSERT INTO mesa (qtdCadeira, qtdMesa, localAmbiente, situacao, dataCadastro)
            VALUES ('$cadeira','$mesa','$local','$situacao','$registro')";
           
        $banco->query($sql);
        if($banco->affected_rows >= 1){
            echo "Registro realizado com sucesso!";
        }
    }else{
       echo "Erro ao fazer registro";
    } 

    $banco->close();
            
        ?>
    </div>

</body>
</html>
</body>
</html>