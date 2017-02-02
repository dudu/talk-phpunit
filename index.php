<?php

require 'vendor/autoload.php';

$calculator = new \MyApp\Example\Calculator();

$bankAccountA = new \MyApp\Example\BankAccount(123, 555, 'F');
$bankAccountB = new \MyApp\Example\BankAccount(123, 666, 'J');

$sum = $calculator->sum($bankAccountA, $bankAccountB);

echo sprintf("O resultado da soma é: %d \n", $sum);