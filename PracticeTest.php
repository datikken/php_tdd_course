<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class PracticeTest extends TestCase

{
    /** @test */
    public function test_hello_world()
    {
        $greeting = 'Hello World';
        $this->assertEquals('Hello World', $greeting);
    }

    /** @test */
    public function test_value_is_the_same()
    {
        $val = 0;
        $this->assertSame(0, $val);
    }

    /** @test */
    public function test_assert_contains()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertContains('Dayle', $names);
    }

    /** @test */
    public function test_array_has_key()
    {
        $fam = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];

        $this->assertArrayHasKey('parents', $fam);
    }

    public function test_variable_type()
    {
        $age = 25;
        $this->assertIsInt($age);
    }
}
