<?php

function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1'; //$servidor = '127.0.0.1:3307'; -> SE FOR ALTERAR PORTA
    $usuario = 'root';
    $senha = 'root';

    try {
        $conexao = new PDO("mysql:host=$servidor; dbname=$banco",$usuario, $senha);
        return $conexao;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}

// novaConexao();
// echo "fim";