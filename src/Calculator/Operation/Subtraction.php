<?php

namespace App\Calculator\Operation;

class Subtraction  extends BaseOperation
{
    const OPERATION = '-';

    protected function getOperandsCount(): int
    {
        return 2;
    }

    public function execute(array $operands): float
    {
       return $operands[0] - $operands[1];
    }
}