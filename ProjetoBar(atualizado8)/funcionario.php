<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/funcionario.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Funcionários</title>
</head>
    <body>
        <?php include("menu-header2.php"); ?>

    


        <div class="content">
        <h1>Login Funcionário</h1>
            <form action="funcionario1.php" method="post">
                <div>
                    <input type="text" name="cpf"  placeholder="Digite seu CPF" minlength="11" maxlength="11"  required class="inputs">
                    
                </div>
                <br><br>
                 <div>
                    <input type="password" name="senha" placeholder="senha" maxlength="25" minlength="10" pattern="[A-z]{1,}[0-9]{1,}\W{1,}|[0-9]{1,}[A-z]{1,}\W{1,}|[0-9]{1,}\W{1,}[A-z]{1,}|\W{1,}[0-9]{1,}[A-z]{1,}|\W{1,}[A-z]{1,}[0-9]{1,}|[A-z]{1,}\W{1,}[0-9]{1,}" class="inputs"
                    title="A senha deve ter: entre 10 a 25 caracteres, números, letras(minúsculas ou maiúsculas) e caracteres especiais" required>
                </div>
               
                <br><br>
                
                    <button type="submit" id="submit">Enviar</button>
                </form>
        </div>
    </body>
</html>