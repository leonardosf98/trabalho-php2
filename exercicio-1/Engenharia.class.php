<?php

require_once "Curso.class.php";

class Engenharia extends Curso {
    private string $areaFoco;

    public function __construct(string $areaFoco) {
        parent::__construct("Engenharia", 5);
        $this->areaFoco = $areaFoco;
    }

    public function detalharCurso(): void {
        echo "Este curso foca na área de {$this->areaFoco}.\n";
    }
}

?>