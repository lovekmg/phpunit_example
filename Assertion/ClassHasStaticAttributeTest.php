<?php
use PHPUnit\Framework\TestCase;

class ClassHasStaticAttributeTest extends TestCase
{
    public function testFailure()
    {
        $this->assertClassHasStaticAttribute('foo', 'stdClass', 'Static Attribute가 없어!');
    }
    public function testFailure2()
    {
        $this->assertClassNotHasStaticAttribute('foo', 'Atest', 'Static Attribute가 있어!');
    }
}
class Atest
{
    static $foo;
}
