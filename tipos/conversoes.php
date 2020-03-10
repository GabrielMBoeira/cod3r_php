<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX); //função para ver se é inteiro

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1); //Converteu para float pois extrapolou o maximo dos num. inteiros.
echo '<br>';
var_dump(1 + 1.0); //continua float
echo '<br>';
var_dump((float) 3); //CAST -> convertendo inteiro para float

// float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8); 
echo '<br>';
var_dump(intval(2.999)); //pega somente a base inteira
echo '<br>';
var_dump((int) round(2.8)); // pega somente a base inteira => round já aredonda ou para cima ou para baixo (continua float) / CAST PARA CONV. PARA INTEIRO

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); //PHP Considera como soma (mesmo tipos !=) => Resultado 5
echo '<br>';
var_dump("3" + 2); //PHP Considera como soma (mesmo tipos !=) => Resultado 5
echo '<br>';
var_dump("3" . 2); //Resultado 32
echo '<br>', is_string("3" . 2);  //Resultado 1 = true = é uma string
// echo '<br>', is_string("3" + 2);//Resultado 5 = não é uma string
echo '<br>';
var_dump(1 + "cinco");  //Resultado 1 => ignorou a string
echo '<br>';
var_dump(1 + "5 cinco"); //Resultado 6 => somou somente o num. da string
echo '<br>';
var_dump(1 + "cinco 5"); //Resultado 1 => ignorou a string não somou
echo '<br>';
var_dump(1 + "2+5"); //Resultado 3 => ignorou a partir do sinal do + 
echo '<br>';
var_dump(1 + "3.2"); //Resultado 4.2 
echo '<br>';
var_dump(1 + "-3.2e2"); //Resultado -319
echo '<br>';
var_dump((int) "10.5"); //Resultado 10 
echo '<br>';
var_dump((float) "10.5"); //Resultado 10.5 