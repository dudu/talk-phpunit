<?php

require 'vendor/autoload.php';

$calculator = new \MyApp\Example\Calculator();

$sum = $calculator->sum(1,2);

echo sprintf("O resultado da soma é: %d \n", $sum);