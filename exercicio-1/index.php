<?php

require_once "Engenharia.class.php";
require_once "Medicina.class.php";
require_once "Fisica.class.php";

$cursos = [
    new Engenharia("Civil"),
    new Medicina(5000),
    new Nutricao("Alimentação")
];

foreach ($cursos as $curso) {
    $curso->mostrarInformacoes();
    $curso->detalharCurso();
    echo "----------------------\n";
}

?>