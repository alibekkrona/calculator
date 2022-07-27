<?php

namespace App\Calculator\Operation;

class Subtraction  extends BaseOperation
{
    const OPERATION = '-';

    protected function mathAction(array $operands): float
    {
        return $operands[0] - $operands[1];
    }

    protected function getOperandsCount(): int
    {
        return 2;
    }
}