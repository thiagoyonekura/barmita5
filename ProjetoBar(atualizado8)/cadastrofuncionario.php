<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastro1.css">
    
    <title>Cadastro Colaborador</title>


</head>

<body >
    <div>
    <?php include("menu-header2.php"); ?>
    </div>
    <div class="formulario">
        <h2>Cadastro Colaborador</h2>

        <div class="content">
        <form action="cadastrofuncionario1.php" method="post">
            
            <input type="text" name="nome"  placeholder="Nome completo" minlength="10" maxlength="50" required class="inputs">
            <br><br>
            <input type="email" name="email"  placeholder="example@mail.com" required pattern="[\w]{3,}@[\w]{3,}(.com)|[\w]{3,}@[\w]{3,}(.com.br)|[\w]{3,}@[\w]{3,}(.edu.br)"
            title="O e-mail de ter pelo menos 3 caracteres antes do '@' e após ele, o endereço de e-mail deve ser encerrado em '.com','.com.br' ou '.edu.br'" class="inputs">
            <br><br>
            <input type="text" name="endereco"  placeholder="Endereço"  required class="inputs">
            <br><br>
            <input type="tel" name="telefone" minlength="10" maxlength="11" placeholder="Telefone"  required class="inputs">
            <br><br>
            <input type="date" name="idd" required class="inputs">
            <br><br>
            <input type="text" name="cpf"  placeholder="CPF" minlength="11" maxlength="11"  required class="inputs">
            <br><br>
            <input type="radio" name="genero" class="genero" value="Masculino" required>Gênero Masculino
            <input type="radio" name="genero" class="genero" value="Feminino" required>Gênero Feminino
            <br><br>
            <input type="password" name="senha" placeholder="Senha" maxlength="25" minlength="10" pattern="[A-z]{1,}[0-9]{1,}\W{1,}|[0-9]{1,}[A-z]{1,}\W{1,}|[0-9]{1,}\W{1,}[A-z]{1,}|\W{1,}[0-9]{1,}[A-z]{1,}|\W{1,}[A-z]{1,}[0-9]{1,}|[A-z]{1,}\W{1,}[0-9]{1,}"
            title="A senha deve ter: entre 10 a 25 caracteres, números, letras(minúsculas ou maiúsculas) e caracteres especiais" required class="inputs">
            <br><br>
            <input type="submit" value="Cadastrar" id="button" ><br><br>
            <input type="reset" value="Apagar" id="button">
        </form>

        </div>
    </div>
</body>
</html>