<?php

$dsn = 'mysql:dbname=meubanco;host=172.26.0.3';
$user = 'root';
$password = 'senha123';

phpinfo()
try{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


?>