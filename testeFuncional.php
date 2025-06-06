<?php
use PHPUnit\Framework\TestCase;

require_once "desconto.php";

class testeFuncional extends TestCase{

    public function testFuncional()
    {
        $cenarios = [
            ['valorCompra' => 100, 'categoriaCliente' => 'premium', 'resultadoEsperado' => 80],
            ['valorCompra' => 100, 'categoriaCliente' => 'regular', 'resultadoEsperado' => 90],
            ['valorCompra' => 100, 'categoriaCliente' => 'novo', 'resultadoEsperado' => 95],
            ['valorCompra' => 100, 'categoriaCliente' => 'outro', 'resultadoEsperado' => 100],
            ['valorCompra' => 0, 'categoriaCliente' => 'premium', 'resultadoEsperado' => "Valor inválido"],
            ['valorCompra' => -10, 'categoriaCliente' => 'regular', 'resultadoEsperado' => "Valor inválido"],
        ];

        foreach ($cenarios as $cenario) {
            $resultado = calcularDesconto($cenario['valorCompra'], $cenario['categoriaCliente']);
            $this->assertEquals(
                $cenario['resultadoEsperado'],
                $resultado,
                "Falha no teste para valor {$cenario['valorCompra']} e categoria {$cenario['categoriaCliente']}"
            );
        }
    }

}

?>