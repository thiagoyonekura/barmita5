<div>
    <?php include("menu-header.php"); ?>
    </div>
    <div>
        <?php
        if(!empty($_GET['idReserva'])){
        
        include 'conectabanco.php';

        $idreserva = $_GET['idReserva'];

        $sqlSelect = "SELECT * FROM reserva WHERE idReserva = $idreserva";

        $resultado = $banco->query($sqlSelect);

        if($resultado->num_rows > 0){
            while($userdata = mysqli_fetch_assoc($resultado)){
                //$nome = $_SESSION['nome'];
            $datareserva = $userdata['dataReserva'];
            $horario = $userdata['horario'];
            $qtdpessoa = $userdata['qtdPessoa'];
            $ocasiao = $userdata['ocasiao'];
            $situacao = $userdata['situacao'];
            $cpf = $_SESSION['cpf'];

            }
            
        }else{
            header('Location: listareserva.php');
        }
    }
    

    $banco->close();    
            
        ?>
    </div>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/editareserva.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Reservas</title>
</head>
<body>

<div class="telareservacadastro">
    <h1>Fazer reserva de mesa</h1>
        <form action="salvaeditareserva.php" method="post">
        <div class="inputreservacadastro">
       <?php
       echo $_SESSION['nome'];
       //include'conectabanco.php';
       ?>
        </div> 
        <br><br>
        <div class="inputreservacadastro">
        <label for="datareserva">Data</label><br>
        <input type="date" name="dataReserva" id="data" value="<?php echo ($datareserva) ?>" required>
        </div>
        <br><br>
        <div class="inputreservacadastro">
        <label for="hora" class="labelreservacadastro">Hora</label><br>
        <input type="text" name="hora" id="hora" class="inputusuario" placeholder="exemplo: 12:00" value="<?php echo ($horario) ?>" required>
        </div>
        <br><br>
        <div class="inputreservacadastro">
        <label for="qtdpessoa">Quantidade de pessoas</label><br>
        <input type="number" name="qtdPessoa" id="qtdpessoa" value="<?php echo ($qtdpessoa) ?>" min=1 max=20>
        </div>
        
        <br><br>
        <div class="inputreservacadastro">
        <label for="ocasiao" class="labelreservacadastro">Ocasião</label><br>
        <input type="text" name="ocasiao" id="ocasiao" class="inputusuario" placeholder="(exemplo: aniversário, reunião,...)" value="<?php echo ($ocasiao) ?>" maxlength="45">
        </div>
        <br><br>
        <input type="radio" name="situacao" class="situacao" value="Reserva confirmada" required>Confirmar reserva
        <input type="radio" name="situacao" class="situacao" value="Reserva cancelada" required>Cancelar reserva
        <br><br>
        <input type="hidden" name="idReserva" value="<?php echo ($idreserva) ?>">
        <input type="submit" name="update" value="Salvar" id="update">
        <br><br>
        </form>
        <form action="listareserva.php" method="post">
        <input type="submit" value="Voltar para lista de reservas" id="submit">
        </form>

    </div>


</body>
</html>
