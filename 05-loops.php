<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
<?php
$i = 1;
while($i <= 3){
?>
    <p>Senac Penha - I vale <?=$i?><p>
<?php
    $i++;
}
?>

<h3>do/while</h3>
<ul>
<?php 
$j = 1;
do {
?>

    <li>Item: <?=$j?></li>
<?php
    $j++;
} while($j <= 5)
?>

</ul>

<h3>for</h3>
<?php
$alunos = ["Jean", "Giuseppe", "Arthur"];

for( $i = 0; $i < 3; $i++ ){
?>
    <p>Aluno: <?=$alunos[$i]?> </p>
<?php
}
?>

</body>
</html>