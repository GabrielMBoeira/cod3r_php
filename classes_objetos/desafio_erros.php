<div class="titulo">Desafio Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2();
}

abstract class ClasseAbstrata implements Template { //INTERFACE SEMPRE É IMPLEMENTS (NÃO PODE SER EXTENDS)

    public function metodo3() {
        echo "Estou funcionando";
    }

    public function metodo1() {

    }

}

class Classe extends ClasseAbstrata { //CLASSE HERDANDO => EXTENDS

    function __construct($parametro) {

    }

    public function metodo2() {
        
    }
    
}
    


$exemplo = new Classe('...');
$exemplo->metodo3();