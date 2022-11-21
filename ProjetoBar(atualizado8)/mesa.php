<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mesa.css">

    <title>Document</title>
</head>
<body>
<div>
    <?php include("menu-header2.php"); ?>
    </div>
<?php include 'conectabanco.php';?>
<?php $select = "SELECT * FROM mesa"; 
$resultado = mysqli_query($banco, $select); ?>
<table class="tabelamesa">
    <thead>
        <th>idMesa</th> <th>qtdCadeira</th> <th>qtdMesa</th> <th>localAmbiente</th> 
        <th>situacao</th> <th>dataCadastro</th>
    </thead>
    <tbody>
        <?php 
        if($resultado){
            while($linha = mysqli_fetch_assoc($resultado)){
                $id_result = $linha['idMesa'];
                $cadeira_result = $linha['qtdCadeira'];
                $mesa_result = $linha['qtdMesa'];
                $local_result = $linha['localAmbiente'];
                $situacao_result = $linha['situacao'];
                $data_result = $linha['dataCadastro'];
                echo "<tr>
                <td>$id_result</td> <td>$cadeira_result</td> 
                <td>$mesa_result</td> <td>$local_result</td>
                <td>$situacao_result</td> <td>$data_result</td> 
            </tr>";
            }
        }
        ?>
        <div>
            <form action="mesa1.php" method="post"> 
                <input type="number" name="cadeira" min="1" max="20" required>
                <input type="number" name="mesa" min="1" max="9" required>
                <select name="local" id="" required> <option value="interno">interno</option> 
                <option value="externo">externo</option></select>
                <select name="situacao" id=""> <option value="ativo">ativo</option>
            <option value="inativo">inativo</option></select>
            <input type="date" name="registro" required>
            <input type="submit" value="Salvar">
         </form>
        </div>
        
        
    </tbody>
</body>
</html>