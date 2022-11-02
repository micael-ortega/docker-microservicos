<?php
require("connection.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
   phpinfo();

} else{

$categoria = $_POST['categoria'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];

$insert = $pdo->query("INSERT INTO produtos (
    categoria, 
    produto, 
    valor
    ) 
    VALUES (
        '$categoria',
        '$produto', 
        '$valor'
        )");
}
?>

