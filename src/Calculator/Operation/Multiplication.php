<?php

namespace App\Calculator\Operation;

class Multiplication  extends BaseOperation
{
    const OPERATION = 'x';

    protected function getOperandsCount(): int
    {
        return 2;
    }

    public function execute(array $operands): float
    {
        $this->operandsValidation($operands);

        return $operands[0] * $operands[1];
    }
}