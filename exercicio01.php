<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio 1</h1>

    <?php
    const NOME = "Pedro";
    $idade = 20;

    echo "<p>Parabéns <i>".NOME."</i> por ter completado <b>$idade</b> anos!</p>";
    ?>

    <p>Parabéns <i><?=NOME?></i> por ter completado <b><?=$idade?></b> anos!</p>
</body>
</html>