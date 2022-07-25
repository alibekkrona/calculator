<?php

namespace App\Calculator\Operation;

interface ISpeciallyValidated
{
    public function specialValidation(array $operands);
}