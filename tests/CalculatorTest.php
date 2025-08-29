<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    // TESTES DE SOMA
    // Define valores de entrada, calcula o resultado com a função de soma e compara com o resultado esperado
    public function testSomar() {
        $a = 20; // valor 1
        $b = 3; // valor 2
        $esperado = 23; // resultado esperado

        $resultado = $this->calculator->somar($a, $b); // chama a função somar da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testSomarNegativo() {
        $a = -20;
        $b = -3;
        $esperado = -23;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testSomarZero() {
        $a = 20;
        $b = 0;
        $esperado = 20;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    // TESTES DE SUBTRAÇÃO
    // Define valores de entrada, calcula o resultado com a função de subtração e compara com o resultado esperado
    public function testSubtrair() {
        $a = 20; // valor 1
        $b = 3; // valor 2
        $esperado = 17; // resultado esperado

        $resultado = $this->calculator->subtrair($a, $b); // chama a função subtrair da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testSubtrairNegativo() {
        $a = 3;
        $b = 20;
        $esperado = -17;

        $resultado = $this->calculator->subtrair($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    // TESTES DE MULTIPLICAÇÃO
    // Define valores de entrada, calcula o resultado com a função de multiplicação e compara com o resultado esperado
    public function testMultiplicar() {
        $a = 20; // valor 1
        $b = 3; // valor 2
        $esperado = 60; // resultado esperado

        $resultado = $this->calculator->multiplicar($a, $b); // chama a função multiplicar da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testMultiplicarZero() {
        $a = 20;
        $b = 0;
        $esperado = 0;

        $resultado = $this->calculator->multiplicar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMultiplicarNegativo() {
        $a = -20;
        $b = -3;
        $esperado = 60;

        $resultado = $this->calculator->multiplicar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    // TESTES DE DIVISÃO
    // Define valores de entrada, calcula o resultado com a função de divisão e compara com o resultado esperado
    public function testDividirExato() {
        $a = 20; // valor 1
        $b = 5; // valor 2
        $esperado = 4; // resultado esperado

        $resultado = $this->calculator->dividir($a, $b); // chama a função dividir da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testDividirDecimal() {
        $a = 20;
        $b = 3;
        $esperado = 6.666666666666667; // resultado esperado

        $resultado = $this->calculator->dividir($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testDividirZero() {
        $this->expectException(\InvalidArgumentException::class);

        $a = 20;
        $b = 0;
        $this->calculator->dividir($a, $b);
    }

    
    // TESTES DE POTÊNCIA
    // Define valores de entrada, calcula o resultado com a função de potência e compara com o resultado esperado
    public function testPotencia() {
        $b = 20; // base da potência
        $e = 2; // expoente da potência
        $esperado = 400; // resultado esperado

        $resultado = $this->calculator->potencia($b, $e); // chama a função potencia da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testPotenciaZero() {
        $b = 20;
        $e = 0;
        $esperado = 1;

        $resultado = $this->calculator->potencia($b, $e);
        $this->assertEquals($esperado, $resultado);
    }

    public function testPotenciaNegativo() {
        $b = 20;
        $e = -2;
        $esperado = 0.0025;

        $resultado = $this->calculator->potencia($b, $e);
        $this->assertEquals($esperado, $resultado);
    }

    // TESTES DE RAIZ QUADRADA
    // Define valor de entrada, calcula o resultado com a função de raiz e compara com o resultado esperado
    public function testRaizQuadrada() {
        $a = 100; // valor 1
        $esperado = 10; // resultado esperado

        $resultado = $this->calculator->raizQuadrada($a); // chama a função raizQuadrada da classe Calculator
        $this->assertEquals($esperado, $resultado); //  compara o resultado obtido com o esperado
    }

    public function testRaizQuadradaZero() {
        $a = 0;
        $esperado = 0;

        $resultado = $this->calculator->raizQuadrada($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testRaizQuadradaNegativo() {
        $this->expectException(\InvalidArgumentException::class);

        $a = -20;
        $this->calculator->raizQuadrada($a);
    }

    // TESTES DE FATORIAIS
    // Define valor de entrada, calcula o resultado com a função de fatorial e compara com o resultado esperado
    public function testFatorialZero() {
        $a = 0; // valor 1
        $esperado = 1; // resultado esperado

        $resultado = $this->calculator->fatorial($a); // chama a função fatorial da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

        public function testFatorialUm() {
        $a = 1;
        $esperado = 1;

        $resultado = $this->calculator->fatorial($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testFatorialNumeroMaior() {
        $a = 3;
        $esperado = 6;

        $resultado = $this->calculator->fatorial($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testFatorialNegativo() {
        $this->expectException(\InvalidArgumentException::class);

        $a= -20;
        $this->calculator->fatorial($a);
    }

    // TESTES DE MÉDIAS
    // Define valor de entrada, calcula o resultado com a função de média e compara com o resultado esperado
    public function testMedia() {
        $a = [20, 30, 40, 50, 60]; // array de números
        $esperado = 40; // resultado esperado

        $resultado = $this->calculator->media($a); // chama a função media da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testMediaNumero() {
        $a = [20];
        $esperado = 20;

        $resultado = $this->calculator->media($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMediaVazio() {
        $this->expectException(\InvalidArgumentException::class);

        $a = [];
        $this->calculator->media($a);
    }

    // TESTES DE NÚMERO PAR
    // Define valor de entrada, calcula o resultado com a função de número par e compara com o resultado esperado
        public function testParPositivo() {
        $a = 20; // valor 1
        $esperado = true; // resultado esperado

        $resultado = $this->calculator->ehPar($a); // chama a função ehPar da classe Calculator
        $this->assertEquals($esperado, $resultado); //  compara o resultado obtido com o esperado
    }

    public function testImparPositivo() {
        $a = 3;
        $esperado = false;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testParZero() {
        $a = 0;
        $esperado = true;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testParNegativo() {
        $a= -20;
        $esperado = true;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testImparNegativo() {
        $a = -3;
        $esperado = false;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }


    // TESTES DE MAIOR NÚMERO
    // Define valor de entrada, calcula o resultado com a função de maior número e compara com o resultado esperado
        public function testMaiorPositivos() {
        $a = [20, 30, 40, 50, 60]; // array de números
        $esperado = 60; // resultado esperado

        $resultado = $this->calculator->maiorNumero($a); // chama a função maiorNumero da classe Calculator
        $this->assertEquals($esperado, $resultado); // compara o resultado obtido com o esperado
    }

    public function testMaiorNegativos() {
        $a = [-20, -30, -40, -50, -60];
        $esperado = -20;

        $resultado = $this->calculator->maiorNumero($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMaiorNumeroMisto() {
        $a= [-20, 30, -40, 50, -60];
        $esperado = 50;

        $resultado = $this->calculator->maiorNumero($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMaiorNumeroVazio() {
        $this->expectException(\InvalidArgumentException::class);

        $a = [];
        $this->calculator->maiorNumero($a);
    }
}