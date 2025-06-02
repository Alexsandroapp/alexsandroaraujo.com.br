<?php
$host = 'arquivos-db';
$user = 'arquivos';
$pass = '008152';
$db = 'site_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida ao banco de dados!";
$conn->close();
?>
