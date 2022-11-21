<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
    <?php include("menu-header.php"); ?>
    </div>
    <div>
    <?php
    //error_reporting(0);
    include 'conectabanco.php';

    

    $email = $_POST['email'];
    $oi = $_POST['senha'];
    
    function crypto($oi) {

        $real = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z"];
        
        $fake = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z","9","8","7","6","5","4","3","2","1","0","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        
    
        $ecryptedValue = array();
        
        $keys = str_split($oi);
        
        foreach ($keys as $oi) {
            $key = array_search($oi, $real);
            array_push($ecryptedValue, $fake[$key]);
        }
        
        return implode($ecryptedValue);
      }
      
      $senhacripto = crypto($oi);
      
    if(isset($email)|| isset($senhacripto)){
        if(strlen($email) == 0){ //strlen = quantidade de caracteres.
            echo "Preencha seu e-mail. ";
        }else if(strlen($senhacripto) == 0){
            echo "Preencha sua senha. ";
        }else{  //p evitar que hacker possa digitar ' OR 1='1 Joga direto na consulta do SQL
            $email = $banco->real_escape_string($email);
            $senhacripto = $banco->real_escape_string($senhacripto);
        } 
    }


    $sql = "SELECT cpf, nome, email, senha FROM cliente WHERE email = '$email'";
    //echo "$sql";
    $cliente = $banco->query($sql);
    if($cliente){ //cliente resultado da consulta é cheio?
        while($row= mysqli_fetch_assoc($cliente)){
            if($row['senha']==$senhacripto){
                $_SESSION['cpf']=$row['cpf'];
                $_SESSION['nome']=$row['nome'];
                $_SESSION['email']=$row['email'];
                header('Location: reservacadastro.php');
                $banco->close();
            }else{
                echo "A senha do usuário $email está incorreta.";
            }
        }
    }else{
        $banco->close();
        echo "E-mail: $email não cadastrado";
    }

    ?>
    </div>
</body>
</html>