<?php


namespace Tests\Functional;

use App\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testValidate(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute([2, 2], 'sin');
        $this->assertEquals('Operation is not supported', $result);

        $result = $calculator->execute([], '/');
        $this->assertEquals('Operand(s) should be provided', $result);
    }

    public function testExecute(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute([1], '+');
        $this->assertEquals('Not all operands has been provided', $result);

        $result = $calculator->execute([null, 2], '+');
        $this->assertEquals('Operand 1 can not be empty', $result);

        $result = $calculator->execute(['s', 2], '+');
        $this->assertEquals('Operand 1 should be a numeric', $result);

    }

    public function testGetOperationScenario(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute([1, 1], '+');
        $this->assertEquals(2, $result);

    }

    public function testSpecialScenarios(): void
    {
        $calculator = new Calculator();

        $result = $calculator->execute([1, 0], '/');
        $this->assertEquals('Division by zero is not allowed', $result);
    }
}