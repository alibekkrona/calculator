<?php

namespace App\Calculator\Operation;

use App\Calculator\Exception\ValidationException;

class Division extends BaseOperation implements ISpeciallyValidated
{
    const OPERATION = '/';

    protected function mathAction(array $operands): float
    {
        $this->specialValidation($operands);

        return $operands[0] / $operands[1];
    }

    public function specialValidation(array $operands): void
    {
        if ($operands[1] == 0) {
            throw new ValidationException('Division by zero is not allowed');
        }
    }

    protected function getOperandsCount(): int
    {
        return 2;
    }
}