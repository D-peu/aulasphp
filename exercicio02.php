<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exericio 2</title>
</head>
<body>
    <h1>Exercicio 2</h1>
    <hr>

<?php
$dados = [
    "usuario" => "queijo_furado",
    "senha" => "123",
    "idade" => 20,
    "cidade" => "São Paulo",
    "telefone" => ["11 989129713", "11 9823743524"]
]
?>

<h2>Dados</h2>

<ul>
    <li> Nome de usuário: <?=$dados["usuario"]?> </li>
    <li> Idade: <?=$dados["idade"]?> anos</li>
    <li> cidade: <?=$dados["cidade"]?> </li>
    <li> Telefone: <?=$dados["telefone"][0]?> </li>
</ul>
</body>
</html>