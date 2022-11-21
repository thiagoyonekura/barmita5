<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['cpfF']);
unset($_SESSION['senha']);
//$_SESSION['email']=null;
//$_SESSION['senha']=null;
header("Location: index.php");
?>