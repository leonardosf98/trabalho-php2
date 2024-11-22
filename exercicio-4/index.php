<?php

interface ServicosSalao {
    public function cortarCabelo(float $preco): string;
    public function fazerUnhas(float $preco): string;
    public function massagemRelaxante(float $preco): string;
}

class SalaoDeBeleza implements ServicosSalao {
    public function cortarCabelo(float $preco): string {
        return "Corte de cabelo realizado. Preço: R$ " . number_format($preco, 2, ',', '.');
    }

    public function fazerUnhas(float $preco): string {
        return "Unhas feitas. Preço: R$ " . number_format($preco, 2, ',', '.');
    }

    public function massagemRelaxante(float $preco): string {
        return "Massagem relaxante realizada. Preço: R$ " . number_format($preco, 2, ',', '.');
    }
}

class Apresentacao {
    private ServicosSalao $salao;

    public function __construct(ServicosSalao $salao) {
        $this->salao = $salao;
    }

    public function exibirServicos(): void {
        echo "<h1>Serviços do Salão de Beleza</h1>";
        echo "<p>" . $this->salao->cortarCabelo(50.00) . "</p>";
        echo "<p>" . $this->salao->fazerUnhas(30.00) . "</p>";
        echo "<p>" . $this->salao->massagemRelaxante(80.00) . "</p>";
    }
}

$salao = new SalaoDeBeleza();

$apresentacao = new Apresentacao($salao);
$apresentacao->exibirServicos();

?>
