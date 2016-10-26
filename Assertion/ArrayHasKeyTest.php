<?php
class ArrayHasKeyTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertArrayHasKey('foo', ['bar' => 'baz'], 'key가 없어!!');
    }
    public function testFailure2()
    {
        $this->assertArrayNotHasKey('foo', ['foo' => 'baz'], 'key가 있어!!');
    }
}
