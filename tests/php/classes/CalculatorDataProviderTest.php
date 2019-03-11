<?php

/* This file name breaks the naming convention of ClassnameTest.php, this is for
teaching purposes so we can separate the initial tests from the version using the data
provider. In practice this file should replace CalculatorTest.php
*/

namespace php\classes;

use PHPUnit\Framework\TestCase;

class CalculatorDataProviderTest extends TestCase
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

    public function addDataProvider() {
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }

}
