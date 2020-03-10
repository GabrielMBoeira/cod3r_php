<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE; //retorna no browser 1
echo '<br>';
echo FALSE; //não retorna nada no browser

echo '<br>' . var_dump(true); // bool case insensitive
echo '<br>' . var_dump(False); // bool case insensitive 
echo '<br>' . var_dump('false'); //string   
echo '<br>' . is_bool(false); //não retorna nada
echo '<br>' . is_bool('true'); // 1

// fazer as regras de conversões 
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); //true
echo '<br>' . var_dump((bool) -1); //true
echo '<br>' . var_dump((bool) 0.0); // false
echo '<br>' . var_dump((bool) 0.0000000001); //true
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // todo resto é true
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true

echo '<br>' . var_dump(!!"false"); //Dupla negação converte para boolean

