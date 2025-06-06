<?php
use PHPUnit\Framework\TestCase;

require_once "desconto.php";

class testeDeUnidade extends TestCase{

    public function testDescontoClientePremium()
    {
        $this->assertEquals(80, calcularDesconto(100, 'premium'));
    }

    public function testDescontoClienteRegular()
    {
        $this->assertEquals(90, calcularDesconto(100, 'regular'));
    }

    public function testDescontoClienteNovo()
    {
        $this->assertEquals(95, calcularDesconto(100, 'novo'));
    }

    public function testDescontoClienteDesconhecido()
    {
        $this->assertEquals(100, calcularDesconto(100, 'outro'));
    }

    public function testValorCompraInvalido()
    {
        $this->assertEquals("Valor inválido", calcularDesconto(0, 'premium'));
    }

}

?>