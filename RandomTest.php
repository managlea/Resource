<?php

require "Random.php";

/**
 * This is random test.
 */
class RandomTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        $random = new Random();
        
        
        // Arrange
        $firstVar = 1;

        // Act
        $secondVar = 2;

        // Assert
        $this->assertEquals(3, $random->calculate($firstVar, $secondVar));
    }

    // ...
}
