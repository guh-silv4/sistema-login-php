<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "sql306.infinityfree.com";
$usuario = "if0_41615331";
$senha = "oopk7QcGiVE";
$banco = "if0_41615331_login";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>