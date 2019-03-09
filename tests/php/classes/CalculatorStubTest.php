<?php

namespace php\classes;

use PHPUnit\Framework\TestCase;

class CalculatorStubTest extends TestCase
{
    public function testAddWithStub()
    {
        // Create a stub for the Calculator class.
        $calculator = $this->createMock(Calculator::class);

        // Configure the stub.
        $calculator->method('add')
            ->willReturn(6);

        // Calling $calculator->add() will now return 6 (not 200)
        $this->assertEquals(6, $calculator->add(100,100));
    }
}
