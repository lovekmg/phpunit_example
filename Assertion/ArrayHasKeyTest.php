<?php
use PHPUnit\Framework\TestCase;
class ArrayHasKeyTest extends TestCase
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
