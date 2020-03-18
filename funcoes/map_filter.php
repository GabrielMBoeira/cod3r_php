<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach ($notas as $elemento) {
    $notasFinais1[] = round($elemento); //Substituir por MAP
}

print_r($notasFinais1);

echo "<hr>";

$notasFinais2 = array_map(round, $notas); //Utilizando MAP
print_r($notasFinais2);

echo "<hr>";

$apenasOsAprovados1 = [];

foreach ($notas as $nota) {
    if ($nota > 7) {
        $apenasOsAprovados1[] = $nota; //Substituir por filter
    }
}
print_r($apenasOsAprovados1);

echo "<hr>";

function aprovados($notas) {
    return $notas >= 7;
}

$apenasOsAprovados2 = array_filter($notas, aprovados); //Utilizando FILTER
print_r($apenasOsAprovados2);

echo "<hr>";

function calculoLegal($notas) {
    $notaFinal1 = round($notas) + 1;
    return $notaFinal1 > 10 ? 10 : $notaFinal1;
}

$notaFinal2 = array_map(calculoLegal, $notas);
print_r($notaFinal2);