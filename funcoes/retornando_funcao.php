<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
    // algoritmo (30s)
    return function($b) use ($a) {
        return $a + $b; // 3s
    };
}

echo soma(13)(3); // não irá retornar a soma das 2 variáveis 

$doisMais = soma(2); //DEFININDO O VALOR DO PRIMEIRO PARÂMETRO.
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);

//VELOCIDADE NA EXECUÇÃO DO ALGORITIMO. 

