<?php

namespace App\Calculator\Operation;

use App\Calculator\Exception\ValidationException;

abstract class BaseOperation
{
    abstract protected function getOperandsCount(): int;

    abstract public function execute(array $operands): float;

    protected function operandsValidation(array $operands): void
    {
        if (count($operands) < $this->getOperandsCount()) {
            throw new ValidationException('Not all operands has been provided');
        }

        foreach ($operands as $key => $operand) {
            if ($operand === null) {
                throw new ValidationException('Operand ' . $key + 1 . ' can not be empty');
            }

            if (!is_numeric($operand)) {
                throw new ValidationException('Operand ' . $key + 1 . ' should be a numeric');
            }
        }
    }
}