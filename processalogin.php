<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "conexao.php";

if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conexao, $query);

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {

$usuario = mysqli_fetch_assoc($resultado);

if (password_verify($senha, $usuario['senha'])) {

$_SESSION['id'] = $usuario['id'];
$_SESSION['nome'] = $usuario['nome'];

header("Location: dashboard.php");
exit;

} else {
header("Location: index.php?erro=1");
exit();
}

} else {
header("Location: index.php?erro=1");
exit();
}

mysqli_close($conexao);
?>