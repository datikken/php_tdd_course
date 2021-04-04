<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class PracticeTest extends TestCase

{
    /** @test */
    public function test_hello_world()
    {
        $greeting = 'Hello World';
        $this->assertTrue($greeting == 'Hello World');
    }
}
