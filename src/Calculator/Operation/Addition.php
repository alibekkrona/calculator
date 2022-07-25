<?php

namespace App\Calculator\Operation;

class Addition extends BaseOperation
{
    const OPERATION = '+';

    protected function getOperandsCount(): int
    {
        return 2;
    }

    public function execute(array $operands): float
    {
        $this->operandsValidation($operands);

        return $operands[0] + $operands[1];
    }
}