<div class="titulo">Upload</div>

<?php 
print_r($_FILES);

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/Users/leonardomleitao/Desktop/'; //definindo pasta para salvar o arquivo
    $nomeArquivo = $_FILES['arquivo']['name']; //pegando o nome do arquivo
    $arquivo = $pastaUpload . $nomeArquivo; //caminho completo + nome do arquivo
    $tmp = $_FILES['arquivo']['tmp_name']; //pegando o arquivo do arquivo temporario para mover para a pasta solicitada.

    if (move_uploaded_file($tmp, $arquivo)) { //movendo arquivo
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post"
    enctype="multipart/form-data"> <!--setando encond para suportar envio de arquivos -->
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>