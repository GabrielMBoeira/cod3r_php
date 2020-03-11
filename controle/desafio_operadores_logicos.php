<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t1">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>


<?php

echo $_POST['t1'];
echo $_POST['t2'];

if ($_POST['t1'] == 1 && $_POST['t2'] == 1) {
    echo "<br>TV 50' e Sorvete";
} else if ($_POST['t1'] == 1 || $_POST['t2'] == 1) {
    echo "<br>TV 32' e Sorvete";
} else {
    echo "<br>Fica em casa mais saudável!";
}