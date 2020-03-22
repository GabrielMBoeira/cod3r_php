<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r'); // r => modo de leitura
echo fread($arquivo, 10); //ler 10bytes
echo '<br>';
echo fread($arquivo, 10); //ler 10bytes de onde parou
fclose($arquivo); //fechando arquivo

echo '<hr>';

$arquivo = fopen('teste.txt', 'r'); 
$tamanho = filesize('teste.txt'); // ver o tamanho do arquivo
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho); //lendo o arquivo todo
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>'; // ler arquivo por linha = linha1 (fgets continua de onde parou)
echo fgets($arquivo), '<br>'; // ler arquivo por linha = linha 2
var_dump(fgets($arquivo)); //retorna falso pois não tem 3 linhas
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { // f END OF FILE (enquanto não chegar no final do arquivo ele continua lendo)
    echo fgets($arquivo), '<br>'; //lendo linha a linha
}
fclose($arquivo);

echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo); // lendo caractere por caractere
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+'); //modo duplo tanto leitura como escrita
echo fgets($arquivo), '<br>'; //lendo linha
echo fgets($arquivo), '<br>';//lendo linha
fwrite($arquivo, "\nAdicionado durante a leitura"); //escrevendo no arquivo
fclose($arquivo); //fechando arquivo

echo "Fim!";