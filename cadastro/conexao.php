<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro';

// Estabelece a conexão
$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifica a conexão
if (mysqli_connect_errno()) {
    // Exibe uma mensagem de erro detalhada
    echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
} else {
    echo "Conexão estabelecida com sucesso!";
}

// Fecha a conexão
mysqli_close($conexao);
?>

