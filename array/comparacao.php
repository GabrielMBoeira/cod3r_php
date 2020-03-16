<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2); 
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3); //TRUE
var_dump($arr1 === $arr3); //FALSE pois a ordem dos arrays está diferente
var_dump($arr1 != $arr3); //FALSE pois os arrays são iguais.
var_dump($arr1 !== $arr3); // TRUE pois os arrays não são exatamente identicos 

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //TRUE são iguais mas com tipos diferentes (inteiro / string)
var_dump($arr1 === $arr4); //FALSE sao tipos e ordens diferentes 