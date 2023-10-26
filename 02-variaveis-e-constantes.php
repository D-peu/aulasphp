<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

    <style>
        p { font-family: Verdana; }

        .destaque{
            background-color: yellow;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

    <?php

    /* Formas desaída completas VIA PHP */

    // Variáveis
    $curso = "Programador Web";
    $ano = 2023;
    $area = "Back-End";

    // Saída interpolada
    echo "<p>Estamos no <span class='destaque'>$curso</span> em $ano</p>";
    echo "<p>Estamos no <span class=\"destaque\">$curso</span> em $ano</p>";

    // Não dá certo, as variáveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano</p>';

    // Saída com CONCATENAÇÃO
    echo '<p>Estamos no '.$curso.' em '.$ano.'</p>';
    echo "<p>Estamos no ".$curso." em ".$ano."</p>";
    ?>


    <hr>
    <!-- Forma de saída ABREVIADA/SIMPLIFICADA -->
    
    <p>Estamo no <span class="destaque"><?=$curso?></span> em <?=$ano?></p>;

    <hr>

    <?php
    // Constantes (recomenda-se dar nome em MAIUSCULAS)

    // Forma antiga, Tradiciomal
    define("AUTOR","Tiago Bezerra dos Santos");

    // Forma moderna, atual
    const EMPRESA = "ABC Tecnologia";
    const ANO_FUNDACAO = 2000;
    ?>

    <!-- Saídas -->
    <p>Autor do site: <?=AUTOR?> </p>
    <p>Nome da empresa: <?=EMPRESA?> </p>
    <p>Fundada em: <?=ANO_FUNDACAO?> </p>


</body>
</html>