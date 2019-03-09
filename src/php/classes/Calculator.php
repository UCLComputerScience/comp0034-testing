<?php

namespace php\classes;

use Exception;

class Calculator
{
    public function __construct()
    {

    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * @throws Exception if the provided second argument is zero
     */
    public function divide($a, $b)
    {
        if ($b == null || $b == 0) {
            throw new Exception("Division by zero is not allowed");
        } else {
            return $a / $b;
        }
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }
}

?>