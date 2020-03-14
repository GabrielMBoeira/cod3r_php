<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2; // Unindo arrays => cuidado quando se conter números o + irá somar
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // return 1
echo '<br>' . count($dadosCompletos); // Conta os elementos de um array

echo '<br>';
$indice = array_rand($dadosCompletos); // Retorna um índice de forma randomica
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; // para visualizar o array é necessário a interpolação {}
echo " ${dadosCompletos['idade']}"; // para visualizar o array é necessário a interpolação {} -> $ pode estar fora do  escopo {}

unset($dadosCompletos["nome"]); // retira os elementos de uma array
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos); // Limpado o array todo (retorna NULL no var_dump)

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // irá mostrar somente arrays $pares pois o operador do lado esquerdo tem prioridade
echo '<br>';
print_r($decimais); // $pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares); // este sim une arrays -> união $impares e $pares => Não estarão ordenados (Pares primeiro e dpois impares)
echo '<br>';
print_r($decimais); //Array ( [0] => 0 [1] => 2 [2] => 4 [3] => 6 [4] => 8 [5] => 1 [6] => 3 [7] => 5 [8] => 7 [9] => 9 )

sort($decimais); // ordena os arrays e modifica os índices
echo '<br>';
print_r($decimais); //Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 [7] => 7 [8] => 8 [9] => 9 )