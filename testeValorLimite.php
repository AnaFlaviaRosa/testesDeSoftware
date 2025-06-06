<?php
use PHPUnit\Framework\TestCase;

require_once "desconto.php";

class testeValorLimite extends TestCase{

    public function testValorCompraZero()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(0, 'regular'));
    }

    public function testValorCompraNegativo()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(-10, 'premium'));
    }

    public function testValorCompraMinimoValido()
    {
    // valor muito pequeno, mas ainda válido
        $this->assertEquals(0.0095, calcularDesconto(0.01, 'novo'));
    }

}

?>