
<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, 
// qual o métodos que a posicao do texto 'abc' 
// na string '!AbcaBcabc' retorne 1?
echo strpos('!AbcaBcabc', 'abc') . '<br>';  //Considera case sensitive
echo stripos('!AbcaBcabc', 'abc') . '<br>'; //Desconsidera case sensitive

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));