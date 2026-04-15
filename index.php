


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Proj login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <main class="container">
     <form action="processalogin.php" method="POST"> 
       <h1> Login Proj </h1>
       <?php if(isset($_GET['erro'])): ?>
        <p style="color: #ff4d4d; margin-bottom: 15px; text-align:center;">
            Email ou senha incorretos
        </p>
    <?php endif; ?>
    
<div class="input-box">
         <input placeholder="Usuário" name="email" type="email">
        <i class="bx bxs-user"></i>
        </div>


       <div class="input-box">
        <input placeholder="Senha" name="senha" type="password">
       <i class="bx bxs-lock-alt"></i>
       </div>
     
    <div class="remember-forgot">
        <label>
           <input type="checkbox">
             Lembrar Senha
        </label>
        <a href="esqueci_senha.php">Esqueci a senha </a>
    </div>

    <button type="submit" name="login" class="login">Login</button>
    <div class="register-link">
      <p>
Não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
</p>
    </div>
</form>

 </main>

</body>
</html>