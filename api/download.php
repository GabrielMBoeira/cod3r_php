<div class="titulo">Download</div>

<?php 
session_start();

$arquivos = $_SESSION['arquivos'] ?? []; //se session não tiver arquivos definir [] vazio por default

$pastaUpload = __DIR__ . '/../files/'; //saindo de api e entrando em files
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo; //adicionando no array $arquivos
    $_SESSION['arquivos'] = $arquivos; //session['arquivos'] = recebendo o array já modificado
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../files/<?= $arquivo ?>"> <!--passando o nome do arquivo-->
                <?= $arquivo ?> <!--passando o nome do arquivo-->
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>