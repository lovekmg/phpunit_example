<?php
use PHPUnit\Framework\TestCase;
class ClassHasAttributeTest extends TestCase
{
    public function testFailure()
    {
        $this->assertClassHasAttribute('foo', 'stdClass', 'Attribute가 없어');
    }
    public function testFailure2()
    {
        $this->assertClassNotHasAttribute('foo', 'Atest', 'Attribute가 있어');
    }
}
class Atest
{
    public $foo;
}
