<?php

include("menu-header2.php"); 
include 'conectabanco.php';


$cpf = $_SESSION['fkcpf'];
$senha = $_POST['senha'];
$troca = "SELECT * FROM senhas WHERE fk_cpf = $cpf";
$teste = $banco->query($troca); 
$linha = mysqli_fetch_assoc($teste);
if($linha != null){
$senhaatual = $linha['senhaAtual'];
$s1 = $linha['senha1'];
$s2 = $linha['senha2'];
$s3 = $linha['senha3'];
$dataatual=$linha['dataAtual'];
$d1 = $linha['data1'];
$d2 = $linha['data2'];
$d3 = $linha['data3'];
if($senha == $senhaatual || $senha == $s1 || $senha == $s2 || $senha == $s3){
    echo 'O usuario não pode registrar esta senha';
}
else{
    $tentativa = "UPDATE senhas SET tentativas = 0 WHERE fk_cpf = $cpf";
    $banco->query($tentativa);
    $dia = date('Y-m-d');
    $muda = "UPDATE senhas SET senhaAtual = '$senha', dataAtual = '$dia', senha1 = '$senhaatual', data1 = '$dataatual', senha2 = '$s1', data2 = '$d1', senha3 = '$s2', data3 = '$d2' WHERE fk_cpf = '$cpf'";
    $banco->query($muda);
}
}
$banco->close();
?>