<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    <div>
    <?php include("menu-header.php"); ?>
    </div>
    <div>
        <?php
        //error_reporting(0);
        include 'conectabanco.php';
        
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $datanascimento = $_POST['idd'];
     $cpf = $_POST['cpf'];
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


    if($nome != "" and $email != ""){
        $sql = "INSERT INTO cliente (cpf, nome, telefone, email, dataNascimento, senha)
            VALUES ('$cpf','$nome','$telefone','$email','$datanascimento','$senhacripto')";
        $banco->query($sql);
        if($banco->affected_rows >= 1){
            echo "Cliente $nome cadastrado com sucesso!";
        }}else{
            echo "Erro ao inserir Cliente";}

            $banco->close();
            
        ?>
    </div>

</body>
</html>