<?php

namespace php\classes;
//require('../../../../src/php/classes/Calculator.php');

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $this->assertEquals(7, $this->calculator->add(6, 2), "When adding 6 and 2 the answer should be 8");
    }


    public function testSubtract()
    {
        $this->assertEquals(4, $this->calculator->subtract(6, 2));
    }



    public function testDivide()
    {
        $this->assertEquals(3, $this->calculator->divide(6, 2));

    }

    public function testDivideByZeroGivesError()
    {
        $this->expectExceptionMessage("Division by zero is not allowed");
        $this->calculator->divide(6, 0);
    }

    public function testMultiply()
    {
        $this->assertEquals(12, $this->calculator->multiply(6, 2));
    }
}
