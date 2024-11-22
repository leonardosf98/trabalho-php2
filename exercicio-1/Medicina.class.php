<?php

require_once "Curso.class.php";

class Medicina extends Curso {
    private int $horasEstagio;

    public function __construct(int $horasEstagio) {
        parent::__construct("Medicina", 6);
        $this->horasEstagio = $horasEstagio;
    }

    public function detalharCurso(): void {
        echo "Este curso inclui {$this->horasEstagio} horas de estágio obrigatório.\n";
    }
}

?>