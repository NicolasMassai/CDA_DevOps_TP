<?php

use PHPUnit\Framework\TestCase;
use App\Service\Greetings;

class GreetingsTest extends TestCase
{
    private Greetings $greetings;

    protected function setUp(): void
    {
        $this->greetings = new Greetings();
    }

    public function testGreet(): void
    {
        $name = 'Adrien';
        $expected = "Hello, $name!";
        $this->assertEquals($expected, $this->greetings->greet($name));
    }

    public function testBye(): void
    {
        $name = 'Adrien';
        $expected = "Goodbye, $name!";
        $this->assertEquals($expected, $this->greetings->bye($name));
    }
}