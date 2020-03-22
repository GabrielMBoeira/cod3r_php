<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['nome'] = 'ana';
$_SESSION['email'] = 'ana@emailaz.com.br';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>


<p>
    <a href='basico_sessao.php'>Voltar</a>
</p>
<p>
    <a href='basico_sessao_limpar.php'>Limpar Sessão</a>
</p>