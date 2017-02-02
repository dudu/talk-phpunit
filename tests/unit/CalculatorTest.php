<?php

namespace MyApp\ExampleTest;

use MyApp\Example\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function balanceProvider()
    {
        return [
            [100, 200, 300],
            [500, 300, 800],
            [123, 456, 579],
            [666, 666, 1332],
        ];
    }
    /**
     * @dataProvider balanceProvider
     */
    public function testSumValues(
        $balanceAccountA,
        $balanceAccountB,
        $balanceTotal
    ) {
        $bankAccountA = $this->getMockBuilder('\MyApp\Example\BankAccount')
            ->disableOriginalConstructor()
            ->getMock();

        $bankAccountA->method('getBalance')->willReturn($balanceAccountA);

        $bankAccountB = $this->getMockBuilder('\MyApp\Example\BankAccount')
            ->disableOriginalConstructor()
            ->getMock();

        $bankAccountB->method('getBalance')->willReturn($balanceAccountB);

        $calculator = new Calculator;
        $sum = $calculator->sum($bankAccountA, $bankAccountB);

        $this->assertEquals($balanceTotal, $sum);
    }
}
