<?php
/**
 * Adapted from https://phpunit.de/manual/6.5/en/test-doubles.html
 * User: localadmin
 * Date: 2019-03-08
 * Time: 10:53
 */

namespace php\classes;


class Observer
{
    public function update($argument)
    {
        // Do something.
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // Do something
    }

    // Other methods.
}