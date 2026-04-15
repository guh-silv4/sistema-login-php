<?php
   session_start();
   

   if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body class="Dashboard-body">

<aside class="sidebar">
 <h2>Login proj</h2>
 <nav>
   <a href="#">Dashboard</a>
   <a href="logout.php">Sair</a>
 </nav>
</aside>

<main class="content">
    <h1>Bem-vindo</h1>

    <div class="user-box">
        <h2><?php echo $_SESSION['nome']; ?></h2>
        <p>Você está logado no sistema</p>
    </div>

</main>

</body>
</html>