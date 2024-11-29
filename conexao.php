<?php
// Carregar o arquivo .env
require_once __DIR__ . '/vendor/autoload.php'; // Caminho correto para o autoload do Composer
Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Obter as variáveis de ambiente
$dbHost = $_ENV['DB_HOST'];  // Exemplo: junction.proxy.rlwy.net
$dbPort = $_ENV['DB_PORT'];  // Exemplo: 23851
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

// Definir tempo de espera para a conexão e socket
ini_set('mysqli.connect_timeout', 30);  // Timeout de 30 segundos para a conexão
ini_set('default_socket_timeout', 30);  // Timeout de 30 segundos para operações de rede

// Conexão com o banco de dados, incluindo a porta
$conexao = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, $dbPort);

if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}
?>
