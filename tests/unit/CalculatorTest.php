<?php

namespace MyApp\ExampleTest;

use MyApp\Example\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSumValues()
    {
        $calculator = new Calculator;
        $sum = $calculator->sum(1,2);

        $this->assertEquals(3, $sum);
    }
}
