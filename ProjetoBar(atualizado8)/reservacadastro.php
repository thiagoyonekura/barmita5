<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reservacadastro.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Reservas</title>
</head>
<body>
    <div>
    <?php
     include("menu-header.php"); 
     if($_SESSION['email']!= null){?>
        
        <?php include 'formreservacadastro.php';
    }else{
        header('Location: login.php');
    }
    ?>
    </div>
</body>
</html>