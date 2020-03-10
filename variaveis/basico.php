<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
vaR_Dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros); //retorna 1 (true)

unset($somaDosNumeros); //limpando a variável
echo '<br>'; 
var_dump($somaDosNumeros); //retorna NULL

$variavel = 10;
echo '<br>' . $variavel; //retona 10

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';

var_dump($_SERVER["HTTP_HOST"]);