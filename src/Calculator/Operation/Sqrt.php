<?php

namespace App\Calculator\Operation;

class Sqrt extends BaseOperation
{
    const OPERATION = 'sqrt';

    protected function mathAction(array $operands): float
    {
        return sqrt($operands[0]);
    }

    protected function getOperandsCount(): int
    {
        return 1;
    }
}