<?php

namespace MyApp\Example;

class BankAccount
{
    protected $customerId;

    protected $balance;

    protected $type;

    public function __construct($customerId, $balance, $type)
    {
        $this->customerId = $customerId;
        $this->balance    = $balance;
        $this->type       = $type;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getType()
    {
        return $this->type;
    }
}
