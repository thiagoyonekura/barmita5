<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de senha</title>
</head>
<body>
    <div>
    <?php include("menu-header2.php"); ?>
    </div>
    <h1>Troque sua senha:</h1>
    <form action="trocasenha1.php" method="post">
    <input type="password" name="senha" placeholder="Senha" maxlength="25" minlength="10" pattern="[A-z]{1,}[0-9]{1,}\W{1,}|[0-9]{1,}[A-z]{1,}\W{1,}|[0-9]{1,}\W{1,}[A-z]{1,}|\W{1,}[0-9]{1,}[A-z]{1,}|\W{1,}[A-z]{1,}[0-9]{1,}|[A-z]{1,}\W{1,}[0-9]{1,}"
    title="A senha deve ter: entre 10 a 25 caracteres, números, letras(minúsculas ou maiúsculas) e caracteres especiais" required class="inputs">
    <br><br>
    <input type="submit" value="Alterar" id="button" ><br><br>
    </form>
</body>
</html>