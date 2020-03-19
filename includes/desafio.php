<div class="titulo">Desafio do módulo</div>

<?php

require_once("usuario.php");

$usuario = new Usuario('Gabriel', 31, 'gboeira');
$usuario->apresentar();
unset($usuario);