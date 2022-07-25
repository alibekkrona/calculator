<?php

namespace App\Calculator\Operation;

class Subtraction  extends BaseOperation
{
    const OPERATION = '-';

    public function execute(array $operands): float
    {
        $this->operandsValidation($operands);

        return $operands[0] - $operands[1];
    }

    protected function getOperandsCount(): int
    {
        return 2;
    }
}