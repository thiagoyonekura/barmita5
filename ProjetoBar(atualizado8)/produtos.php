<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/produtos.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Produtos</title>
</head>

<body>
<?php include("menu-header2.php"); ?>
        
<form action="produtos1.php" method="post">
   <h1>Produto</h1>

    Informe o nome do Produto:
    <br>
    <input type="text" name="nome">
    <br><br>
    Informe a Quantidade:
    <br>
    <input type="text" name="quantidade">
    <br><br>
    Informe o Valor do Produto:
    <br>
    <input type="text" name="valor">
    <br><br>
    Informe a Data do Cadastro:
    <input type="date" name="data">
    <br><br>
    <input type="submit" value="Adicionar">
    <br><br>
    <input type="submit" value="Alterar">
    <br><br>
    <input type="submit" value="Apagar">

        <div class="box-select"><br><br>
            <div class="cargo"><label><h3>Situação</h3></label></div>
            <div>
                <input type="radio" name="Situação" id="A" value="A" required>
                <label for="A">Ativo</label>
            </div>
            <div>
                <input type="radio" name="Situação" id="I" value="I">
                <label for="I">Inativo</label>
            </div>                    
        </div>
</form>
<br><br>
</div>  



</body>

</html>