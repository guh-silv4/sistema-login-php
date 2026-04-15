<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "conexao.php";

$verificar = null;
$email = null;

if(isset($_POST['buscar'])){
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        $verificar = mysqli_num_rows($resultado);
    }
}

if(isset($_POST['atualizar'])){
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    
    
    $nova_senha_texto = trim($_POST['nova_senha']); 
    $nova_senha_hash = password_hash($nova_senha_texto, PASSWORD_DEFAULT);
    
    
    $sql = "UPDATE users SET senha = '$nova_senha_hash' WHERE email = '$email'";
    
    if(mysqli_query($conexao, $sql)){
        header("Location: /index.php?sucesso=1");
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recuperar Senha</title>
</head>
<body class="Login-body">

    <div class="login-box">
        <h2>Recuperar Senha</h2>

        <?php if ($verificar === null || $verificar === 0): ?>
    <form method="POST">
        <div class="user-box">
            <input type="email" name="email" placeholder="Digite seu e-mail" required 
                   value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
        </div>
        <button type="submit" name="buscar" class="btn-login">Buscar Conta</button>
        
        <?php if ($verificar === 0): ?>
            <p style="color: #ff4d4d; margin-top: 15px; font-size: 14px;">E-mail não encontrado!</p>
        <?php endif; ?>
    </form>
<?php endif; ?>

        <?php if ($verificar > 0): ?>
            <p style="color: #4CAF50; margin-bottom: 20px;">Conta encontrada!</p>
            <form method="POST">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <div class="user-box">
                    <input type="password" name="nova_senha" placeholder="Nova Senha" required>
                </div>
                <button type="submit" name="atualizar" class="btn-login">Atualizar Senha</button>
            </form>
        <?php endif; ?>

        <div class="links-auxiliares">
            <a href="index.php">Voltar para o Login</a>
        </div>
    </div>

</body>
</html>