<?php

namespace MyApp\ExampleTest;

use MyApp\Example\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function valuesProvider()
    {
        return [
            [1, 2, 3],
            [2, 2, 4],
            [10, 20, 30],
            [13, 37, 50],
        ];
    }

    /**
     * @dataProvider valuesProvider
     */
    public function testSumValues($valueA, $valueB, $total)
    {
        $calculator = new Calculator;
        $sum = $calculator->sum($valueA, $valueB);

        $this->assertEquals($total, $sum);
    }
}
