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
    <?php include("menu-header2.php"); ?>
    </div>
    <div>
        <?php
        //error_reporting(0);
        include 'conectabanco.php';
        
     $cpf = $_POST['cpf'];
     $nome = $_POST['nome'];
     $endereco = $_POST['endereco'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $genero = $_POST['genero'];
     $datanascimento = $_POST['idd'];
     $tchau = $_POST['senha'];
     
    
     
  function crypto($tchau) {

    $real = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z"];
    
    $fake = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z","9","8","7","6","5","4","3","2","1","0","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    

    $ecryptedValue = array();
    
    $keys = str_split($tchau);
    
    foreach ($keys as $tchau) {
        $key = array_search($tchau, $real);
        array_push($ecryptedValue, $fake[$key]);
    }
    
    return implode($ecryptedValue);
  }
  
  $senhacripto = crypto($tchau);


    if($nome != "" and $cpf != ""){
        $sql = "INSERT INTO funcionario (cpf, nome, endereco, telefone, email, genero, dataNascimento, senha)
            VALUES ('$cpf','$nome','$endereco','$telefone','$email','$genero','$datanascimento','$senhacripto')";
        $banco->query($sql);
        if($banco->affected_rows >= 1){
            echo "Funcionário $nome cadastrado com sucesso!";
        }}else{
            echo "Erro ao inserir Funcionário";}

            $banco->close();
            
        ?>
    </div>

</body>
</html>