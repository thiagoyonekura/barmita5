<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/acesso.css">
    <title>Acesso Restrito</title>
</head>
<body>
    
    <div><?php include("menu-header.php"); ?></div>
        <div class="content">
            
            <h1>Acesso Colaborador</h1>
            <?php
        if(isset($_SESSION['cpfF'])){
            if($_SESSION['cpfF']!= null){?>
            <form action="acessofuncionario.php">
        <?php
        }}else{?>
            <form action="funcionario.php">
        <?php
        }?> 
            <button type="submit" id="submit">Entrar</button>
            </form>

            <?php
        if(isset($_SESSION['email'])){
            if($_SESSION['email']!= null){?>
            <form action="reservacadastro.php">
        <?php
        }}else{?>
            <form action="login.php">
        <?php
        }?> 
            <h1>Acesso Cliente</h1>
            <button type="submit" id="submit">Entrar</button>
            </form>
        </div>
</body>
</html> 

