<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Área de cadastro </title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main class="container"> <form action="processa_cadastro.php" method="post">
        <h1>Cadastre-se aqui</h1>

        <div class="input-box">
            <input type="text" name="nome" placeholder="Nome" required>
        </div>

        <div class="input-box">
            <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-box">
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <div class="input-box">
            <input type="password" name="confirmar_senha" placeholder="Confirmar senha" required>
        </div>

        <button type="submit" class="login">Cadastrar</button> 
        </form>

        <?php if (isset($_GET['sucesso'])): ?>
            <p class="SUCESSO">Cadastro realizado com sucesso!</p>
            <a href="login.php" class="btn-login" style="background:red; color:white;">
Voltar para o login
</a>
        <?php endif; ?>
</main>







</body>
</html>