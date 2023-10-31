<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays no PHP (vetores e matrizes)</h1>
    <hr>

    <h2>Arrays numéricos/indexados</h2>
<?php
// Declarando arrays
$bandas = ["Rush", "Slayer", "Iron Maiden"];
$cursos = array("HTML5", "PHP", "Design", "JS");

// Desclarando como constantes
define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
const UNIDADES_SENAC = ["Penha", "Tatuapé", "São Miguel", "Itaquera"];
?>

<h3>Saída de dados de arrays</h3>
<ul>
    <li>Banda que mais gosto: <?=$bandas[0]?> </li>
    <li>Assunto estudado: <?=$cursos[1]?></li>
    <!-- Mini-exercicios
    -Mostre em que unidade do Senac estamos
    -Mostre o Sesc que fica no litoral -->
    <li>Senac em que frequento: <?=UNIDADES_SENAC[0]?> </li>
    <li>Sesc que fica no litoral: <?=UNIDADES_SESC[1]?> </li>
</ul>

<hr>

<h2>Array associativo</h2>
<?php
$livro = [
    // Chave associativa
    "titulo" => "Senhor dos Anéis",
    "autor" => "J.R.R. Tolkien",
    "ano" => 1954,
    "personagem" => ["Gandalf", "Legolas"]
];

$filme = array(
    "titulo" => "Velozez e Furiosos",
    "genero" => "Ação"
);
?>

<h3>Saída de dados (array associativo)</h3>

<p>Livro: <?=$livro["titulo"]?></p>
<p>O cara que usa flechinhas:
    <?=$livro["personagem"][1]?>
</p>


<h3>Comandos para analisar a estrutura de arrays: print_r() e var_dump() </h3>

<?=print_r($bandas)?>

<br><br>

<?=var_dump($bandas)?>

<!-- Saídas com formatação usando a tag <pre> -->
<pre> <?=print_r($bandas)?> </pre>
<pre> <?=var_dump($bandas)?> </pre>

<pre>
<?=var_dump($livro)?>
</pre>


    

</body>
</html>