<?php
include 'conexao.php';

$stmt = $pdo->("SELECT * FROM produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="container mt-4">
    <h2 class="text-center">Controle de estoque</h2>
    <a href="adicionar.php" class="btn-sucess mb-3">adicionar produto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidades</th>
                <th>Preço</th>
                <th>Ações</th>
</tr>
</thead>
<tbody>
    <?php foreach ($produtos as $produtos): ?>
    </tbody>
    </table>
</body>
</html>