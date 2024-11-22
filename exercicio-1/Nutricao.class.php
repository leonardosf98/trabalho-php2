<?php

require_once "Curso.class.php";

class Nutricao extends Curso {
    private string $areaPesquisa;

    public function __construct(string $areaPesquisa) {
        parent::__construct("Nutricao", 4);
        $this->areaPesquisa = $areaPesquisa;
    }

    public function detalharCurso(): void {
        echo "Este curso possui ênfase em pesquisas na área de {$this->areaPesquisa}.\n";
    }
}

?>