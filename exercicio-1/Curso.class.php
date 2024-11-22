<?php

abstract class Curso {
    protected string $nome;
    protected int $duracao;

    public function __construct(string $nome, int $duracao) {
        $this->nome = $nome;
        $this->duracao = $duracao;
    }

    abstract public function detalharCurso(): void;

    public function mostrarInformacoes(): void {
        echo "Curso: {$this->nome}\n";
        echo "Duração: {$this->duracao} anos\n";
    }
}

?>