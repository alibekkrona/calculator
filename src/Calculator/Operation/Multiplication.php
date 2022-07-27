<?php

namespace App\Calculator\Operation;

class Multiplication  extends BaseOperation
{
    const OPERATION = 'x';

    protected function getOperandsCount(): int
    {
        return 2;
    }

    protected function mathAction(array $operands): float
    {
        return $operands[0] * $operands[1];
    }
}