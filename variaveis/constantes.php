<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9); //define => Define uma constante => PADRÃO CONSTANTES LETRAS MAIÚSCULAS
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!'; // Constantes não usam $ na frente
// TAXA_DE_JUROS = 2.5; //Gera erro pois constante não pode ser alterada

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel); //outro jeito de adicionar constante por definição de uma variável
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;