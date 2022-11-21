<div>
    <?php include("menu-header2.php"); ?>
    </div>
    <div>
        <?php
    
        include 'conectabanco.php';
       
     $descrição = $_SESSION['descrição'];
     $qtdproduto = $_POST['qtdproduto'];
     $precoproduto = $_POST['precoproduto'];
     $datacadastro = $_POST['datacadastro'];
     $situacao= $_POST['situacao'];
     
    if($descrição != "" and $qtdproduto != "" and $precoproduto != "" and $datacadastro != "" and $situacao !=""){
        $sql = "INSERT INTO produto (descricao, qtdproduto, precoproduto, datacadastro, situacao)
            VALUES ('$descricao','$qtdproduto','$precoproduto','$datacadastro','$situacao')";
           // echo "$sql";
        $banco->query($sql);
        if($banco->affected_rows >= 1){
            echo "produto cadastrado com sucesso!";
        }
    }else{
       echo "Erro ao alterar produto";
    } 

    $banco->close();
            
        ?>