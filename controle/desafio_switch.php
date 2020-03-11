<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 2.0rem;
    }
</style>

<?php

$valorInput = $_POST['param'];

switch($_POST['conversao']) {
    case 'km-milha':
        $resultado = $valorInput * 0.621371;
    break;
    case 'milha-km':
        $resultado = $valorInput * 1.60934;
    break;
    case 'metro-km':
        $resultado = $valorInput * 0.001;
    break;
    case 'km-metro':
        $resultado = $valorInput * 1000;
    break;
}

echo $resultado;

