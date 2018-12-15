<?php
namespace KEINOS\SCRUTINIZER;

use PHPUnit\Framework\TestCase;
use KEINOS\SCRUTINIZER\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testToString()
    {
        assertEquals('Hello World!', (string)(new HelloWorld()));
    }
}
