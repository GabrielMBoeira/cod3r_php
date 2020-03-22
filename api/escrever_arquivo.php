<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); //parametro w = write => abrindo arquivo
fwrite($arquivo, "Valor inicial\n"); //criando arquivo
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w'); //abrindo o arquivo novamente em modo de escrita
fwrite($arquivo, "Novo conteúdo"); // sobrescrevendo arquivo já existente
fclose($arquivo); //fechando arquivo

$arquivo = fopen('teste.txt', 'a'); //a => append adicionando no arquivo (Não irá sobrescrever)
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); //x => pedido para trabalhar com um arquivo novo  -> vai gerar erro (x => não deixa sobrescrever em um arquivo existente)