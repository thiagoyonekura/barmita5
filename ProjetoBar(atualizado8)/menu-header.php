
<link rel="stylesheet" href="assets/css/header.css">
<header>
    <div class="menu-principal">
        <div class="logo"> <img src="assets/logo barmitaSvg.svg" alt=""></div>
        <?php 
        session_start();
        if(isset($_SESSION['email'])) {// isset variavel email existe
        if($_SESSION['email']!= null){?>
        <a href="logout.php">Sair <i class="bi bi-box-arrow-right"></i></a>
        <?php
        }}?>
        
        <a href="cadastro.php">Cadastro</a>
        <a href="acesso.php">Login</a>
        <?php
        if(isset($_SESSION['email'])){
            if($_SESSION['email']!= null){?>
            <a href="reservacadastro.php">Reservas</a>
        <?php
        }}else{?>
            <a href="login.php">Reservas</a>
        <?php
        }?>        
        <a href="cardapio.php">Cardápio</a>
        <a href="index.php">Home</a>

    </div>
    </header>