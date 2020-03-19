<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>'; // retorna a variável do outro arquivo
    echo soma(2, 5) . '!<br>'; //retorna a função do outra arquivo
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>'; // NÃO CONSEGUIU CHAMAR A FUNÇÃO DO ARQUIVO INCLUDE POIS O MÉTODO AINDA NÃO FOI CHAMADO
carregarArquivo(); // Chamando o método

echo "Variável = '{$variavel}'."; //não consegue chamar a variável que vem do arquivo include
// var_dump($variavel);
echo '<br>' . soma(3, 8); //Consegue chamar função do arquivo que vem do include