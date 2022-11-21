<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Login</title>
</head>

<body>
    <div>
        <?php
         include("menu-header.php");
        ?>
    </div>
    <div class="telalogin">

        <div>
            <h1>Login</h1>
            <form action="login1.php" method="post">
                <label for="email" ></label>
                <input type="email" name="email" id="email" placeholder="E-mail" required pattern="[\w]{3,}@[\w]{3,}(.com)|[\w]{3,}@[\w]{3,}(.com.br)|[\w]{3,}@[\w]{3,}(.edu.br)" 
            title="O e-mail de ter pelo menos 3 caracteres antes do '@' e após ele, o endereço de e-mail deve ser encerrado em '.com','.com.br' ou '.edu.br'"><br>
                <br><br>
                <label for="senha"></label>
                <input type="password" name="senha" id="senha" placeholder="senha" pattern="[A-z]{1,}[0-9]{1,}\W{1,}|[0-9]{1,}[A-z]{1,}\W{1,}|[0-9]{1,}\W{1,}[A-z]{1,}|\W{1,}[0-9]{1,}[A-z]{1,}|\W{1,}[A-z]{1,}[0-9]{1,}|[A-z]{1,}\W{1,}[0-9]{1,}"
            title="A senha deve ter: entre 10 a 25 caracteres, números, letras(minúsculas ou maiúsculas) e caracteres especiais" required><br>
                <br><br>
                <input class="button" type="submit" value="Entrar" name="entrar">    
            </form>
        </div>
        <p></p>
        <div>
            Caso ainda não possua cadastro <a href="cadastro.php"><br> Clique aqui</a>
        </div>

    </div>
</body>

</html>