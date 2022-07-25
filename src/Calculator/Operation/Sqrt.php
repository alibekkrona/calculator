<?php

namespace App\Calculator\Operation;

class Sqrt extends BaseOperation
{
    const OPERATION = 'sqrt';

    protected function getOperandsCount(): int
    {
        return 1;
    }

    public function execute(array $operands): float
    {
        $this->operandsValidation($operands);

        return sqrt($operands[0]);
    }
}