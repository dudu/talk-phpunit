<?php

namespace MyApp\Example;

class Calculator
{
    public function sum(BankAccount $bankAccountA, BankAccount $bankAccountB)
    {
        return $bankAccountA->getBalance() + $bankAccountB->getBalance();
    }
}
