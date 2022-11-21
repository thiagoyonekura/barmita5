<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/listareserva.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


    <title>Lista de reservas</title>
</head>
<body>
<div>
        <?php
            include("menu-header.php");
        ?> 
    <div class="telalistareserva">
             <h1>Lista de reservas</h1>
             
        <?php
            echo "Bem vindo a sua lista de reservas, ", $_SESSION['nome'],".";

            include'conectabanco.php';


       //print_r($lista);
        ?><br><br>
        <form action="" class="busca">
        <input name="busca" class="inputbusca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit" class="iconebusca"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
        </form>
        <br>

    </div>
    <div>
    <table class="tabela">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data da reserva</th>
                <th scope="col">Hora</th>
                <th scope="col">Quantidade de pessoas</th>
                <th scope="col">Ocasião</th>
                <th scope="col">Situação</th>
                <th scope="col">Editar</th>
                <th scope="col">Cancelar</th> 
            </tr>
        </thead>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="8">Digite algo para pesquisar...</td>
        </tr>
        <?php
        } else {
            $pesquisa = $banco->real_escape_string($_GET['busca']);
            $sql = "SELECT * 
                FROM reserva
                WHERE idReserva LIKE '%$pesquisa%' 
                OR dataReserva LIKE '%$pesquisa%'
                OR horario LIKE '%$pesquisa%'
                OR qtdPessoa LIKE '%$pesquisa%' 
                OR ocasiao LIKE '%$pesquisa%'
                OR situacao LIKE '%$pesquisa%'";
            $sql_query = $banco->query($sql) or die("ERRO ao consultar! " . $banco->error); 
            
            if ($sql_query->num_rows == 0) {
                 ?>
            <tr>
                <td colspan="8">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($userdata = $sql_query->fetch_assoc()) {
                    ?>
        <tbody>
            <?php
            
          echo "<tr>";
          echo "<td>".$userdata['idReserva']."</td>";
          echo "<td>".$userdata['dataReserva']."</td>";
          echo "<td>".$userdata['horario']."</td>";
          echo "<td>".$userdata['qtdPessoa']."</td>";
          echo "<td>".$userdata['ocasiao']."</td>";
          echo "<td>".$userdata['situacao']."</td>";
          echo "<td>
            <a class='btn btn-sm btn-primary' href='editareserva.php?idReserva=$userdata[idReserva]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
            </svg>
            </a>
            </td>";
            
            echo "<td>
            <a class='btn btn-sm btn-danger'  href='editareserva.php?idReserva=$userdata[idReserva]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle' viewBox='0 0 16 16'>
            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
            <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
            </svg>
            </a>
            
          </td>";  
          echo "</tr>";

            }
            }
        }
        
          ?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>
