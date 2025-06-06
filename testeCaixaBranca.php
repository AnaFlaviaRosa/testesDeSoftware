<?php
use PHPUnit\Framework\TestCase;

require_once "desconto.php";

class testeCaixaBranca extends TestCase{

    public function testCaminhoValorInvalido()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(0, 'premium')); // Caminho 1
    }

    public function testCaminhoPremium()
    {
        $this->assertEquals(80, calcularDesconto(100, 'premium')); // Caminho 2
    }

    public function testCaminhoRegular()
    {
        $this->assertEquals(90, calcularDesconto(100, 'regular')); // Caminho 3
    }

    public function testCaminhoNovo()
    {
        $this->assertEquals(95, calcularDesconto(100, 'novo')); // Caminho 4
    }

    public function testCaminhoOutro()
    {
        $this->assertEquals(100, calcularDesconto(100, 'desconhecido')); // Caminho 5
    }

}

?>