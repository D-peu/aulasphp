<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>


    <style>
        .urgente{
            color: red
        }

        .repor{
            color: orange;
        }

        .normal{
            color: green
        }
    </style>
</head>
<body>
    <h1>Condicional (if, else, elseif)</h1>
    <hr>

    <h2>Simples</h2>
<?php
$numero = 10;

if($numero > 20){
    echo "<p>$numero é maior que 20.<p>";
}else{
    echo "<p>$numero é menor que 20.<p>";
}
?>


    <h2>Composta (if/else)</h2>
<?php
// Controle de Estoque
$produto = "Geladeira";
$qtdEmEstoque = 0; // o que temos no momento
$qtdCritica = 2; // mínimo necessário
?>

<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?=$qtdEmEstoque?></h4>

<!-- Se a quantidade em estoque for abaixo da quantidade crítica, então o sistema deve avisar e pedir para repor. -->

<!-- caso contrário, simplesmente mostrar que o estoque está normal -->

<?php
if( $qtdEmEstoque < $qtdCritica ){
    echo "<p class='repor'>É necessário repor!</p>";

    // Condicional SIMPLES/ANINHADA
    if($qtdEmEstoque === 0){
        echo "<p class='urgente'>URGENTE</p>";
    }

} else {
    echo "<p class='normal'>Estoque normal</p>";
}
?>

<h2>Encadeada (if, else e elseif)</h2>
<?php
// Verificando o produto para dar uma garantia
if($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
} else {
    $garantia = 1;
}  
?>
<p>O Produto <?=$produto?> possui garantia de <?=$garantia?> ano<?php if($garantia>1) echo "s"?>.</p>

<h3>Encadeada usando switch/case</h3>
<?php
// switch (analise/escolha/avalie)
switch($produto){
    case "Ultrabook": $garantia = 5; break;
    case "Geladeira": $garantia = 3; break;
    case "TV": $garantia = 2; break;
    default: $garantia = 1; break;
}
?>

<p>Produto: <?=$produto?></p>
<p>Garantia: <?=$garantia?></p>

</body>
</html>