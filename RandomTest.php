<?php

class RandomTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = 1;

        // Act
        $b = 2;

        // Assert
        $this->assertEquals(3, $a+$b);
    }

    // ...
}
