<?php
use PHPUnit\Framework\TestCase;
class OutputTest extends TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        echo 'foo';
    }
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        echo 'baz';
    }
}
