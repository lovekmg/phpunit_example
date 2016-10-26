<?php
class OutputTest extends PHPUnit_Framework_TestCase
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
