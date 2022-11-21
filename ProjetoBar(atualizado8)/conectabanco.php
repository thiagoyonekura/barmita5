<?php
$banco = new mysqli(
    "localhost","root","1234","barmita","3310");
if($banco->connect_errno){
    die("Erro ao conectar no banco de dados" . $banco->connect_errno); //mata a execução
    //echo "Erro ao conectar no banco de dados!<br>";
}

/*else{
    echo "conectado banco dados";
}
*/

?>