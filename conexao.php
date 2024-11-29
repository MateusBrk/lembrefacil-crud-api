<?php
// Carregar o arquivo .env
require_once __DIR__ . '/vendor/autoload.php'; // Caminho correto para o autoload do Composer
Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Obter as variáveis de ambiente
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];

// Conexão com o banco de dados
$conexao = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}
?>
