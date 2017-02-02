<?php

namespace MyApp\Example;

class Calculator
{
    public function sum(BankAccount $bankAccountA, BankAccount $bankAccountB)
    {
        if ($bankAccountA->getType() != $bankAccountB->getType())
        {
            throw new \Exception(
                "Accounts with different type aren't summable",
                1
            );
        }

        return $bankAccountA->getBalance() + $bankAccountB->getBalance();
    }
}
