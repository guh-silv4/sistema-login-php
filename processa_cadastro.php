<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$query = "INSERT INTO users (nome, email, senha) 
VALUES ('$nome', '$email', '$senha_hash')";

mysqli_query($conexao, $query);

header("Location: https://projetologin.infinityfreeapp.com/index.php");
exit();

?>