<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/acesso.css">
    <title>Acesso Restrito</title>
</head>
<body>
    <div><?php include("menu-header2.php"); ?></div>
        <div class="content">
            
            <h1>Acesso a página de produtos</h1>
            <form action="produtos.php">
            <button type="submit" id="submit">Entrar</button>
            </form>
            
            <h1>Acesso a página de mesas</h1>
            <form action="mesa.php">
            <button type="submit" id="submit">Entrar</button>
            </form> 
        </div>
        
</body>
</html> 

