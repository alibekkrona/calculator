<?php


namespace Tests\Functional;

use App\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testValidate(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(2,  'sin', 2);
        $this->assertEquals('Operation is not supported', $result);

        $result = $calculator->execute(null, '/', null);
        $this->assertEquals('Operand(s) should be provided', $result);

        $result = $calculator->execute(1, '+', null);
        $this->assertEquals('Not all operands has been provided', $result);

        $result = $calculator->execute(null, '+', 2);
        $this->assertEquals('Operand 1 can not be empty', $result);

        $result = $calculator->execute('s',  '+', 2);
        $this->assertEquals('Operand 1 should be a numeric', $result);
    }

    public function testAddition(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(1,  '+', 1);
        $this->assertEquals(2, $result);

        $result = $calculator->execute(1.2,  '+', 1.2);
        $this->assertEquals(2.4, $result);
    }

    public function testDivision(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(1, '/', 0);
        $this->assertEquals('Division by zero is not allowed', $result);

        $result = $calculator->execute(6, '/', 2);
        $this->assertEquals(3, $result);
    }

    public function testSubtraction(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(2, '-', 1);
        $this->assertEquals(1, $result);

        $result = $calculator->execute(2.1, '-', 0.1);
        $this->assertEquals(2, $result);
    }

    public function testMultiplication(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(2, 'x', 2);
        $this->assertEquals(4, $result);

        $result = $calculator->execute(2.1, 'x', 0.1);
        $this->assertEquals(0.21, $result);
    }

    public function testSqrt(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute(4, 'sqrt', null);
        $this->assertEquals(2, $result);

        $result = $calculator->execute(4.41, 'sqrt', null);
        $this->assertEquals(2.1, $result);
    }
}