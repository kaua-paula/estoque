<?php

$host = "localhost";
$dbname = "estoque";
$username = "root";
$password = "";

try{
    $pdo = new PDO("mysqli:$host;dbname=$dbname;charset=utf8",$username, $password)
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::_EXCEPTION);
}catch (PDOException $error){
    die("Erro na conexão com banco de dados!:">$error->getMessage)
}
?>