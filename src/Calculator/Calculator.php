<?php

namespace App\Calculator;

use App\Calculator\Exception\ValidationException;
use App\Calculator\Operation\BaseOperation;

use App\Calculator\Operation\Addition;
use App\Calculator\Operation\Subtraction;
use App\Calculator\Operation\Multiplication;
use App\Calculator\Operation\Division;
use App\Calculator\Operation\Sqrt;

class Calculator
{
    protected array $supportedOperations = [
        Addition::OPERATION => Addition::class,
        Subtraction::OPERATION => Subtraction::class,
        Multiplication::OPERATION => Multiplication::class,
        Division::OPERATION => Division::class,
        Sqrt::OPERATION => Sqrt::class,
    ];

    public function execute($a, $operationName, $b = null): string
    {
        try {
            $this->validate($a, $operationName, $b);
            $operation = $this->getOperation($operationName);
            $operands = $b === null ? [$a] : [$a, $b];

            return $operation->execute($operands);
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    protected function validate($a, $operationName, $b): void
    {
        if (!array_key_exists($operationName, $this->supportedOperations)) {
            throw new ValidationException('Operation is not supported');
        }

        if ($a === null && $b === null) {
            throw new ValidationException('Operand(s) should be provided');
        }
    }

    protected function getOperation(string $operationName): BaseOperation
    {
        return new $this->supportedOperations[$operationName]();
    }
}