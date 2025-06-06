<?php
use PHPUnit\Framework\TestCase;

require_once "desconto.php";

class CoberturaInstrucoesTest extends TestCase
{
    public function testValorInvalido()
    {
        // Cobre linha: if ($valorCompra <= 0)
        $this->assertEquals("Valor inválido", calcularDesconto(0, 'premium'));
    }

    public function testClientePremium()
    {
        // Cobre if ($categoriaCliente === 'premium')
        $this->assertEquals(80.0, calcularDesconto(100, 'premium'));
    }

    public function testClienteRegular()
    {
        // Cobre elseif ($categoriaCliente === 'regular')
        $this->assertEquals(90.0, calcularDesconto(100, 'regular'));
    }

    public function testClienteNovo()
    {
        // Cobre elseif ($categoriaCliente === 'novo')
        $this->assertEquals(95.0, calcularDesconto(100, 'novo'));
    }

    public function testClienteOutro()
    {
        // Cobre o else final
        $this->assertEquals(100.0, calcularDesconto(100, 'outro'));
    }
}