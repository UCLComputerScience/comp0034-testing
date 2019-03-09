<?php

require('../../../src/php/functions/add.php');

use PHPUnit\Framework\TestCase;

class addTest extends TestCase
{
    public function testAdd()
    {
        $result = add(2, 4);
        $this->assertEquals(6, $result, "2 plus 4 equals 6");
    }

}