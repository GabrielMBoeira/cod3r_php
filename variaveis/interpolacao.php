<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; //não interpola as variáveis
echo "<br> $numero"; //Interpola o valor da variável

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; //espaço inicial implica no código + espaço no final não implica no código

//OU SEJA '' => NÃO INTERPOLA VARIÁVEL / "" INTERPOLA VARIÁVEL / {} INTERPOLA VARIÁVEL