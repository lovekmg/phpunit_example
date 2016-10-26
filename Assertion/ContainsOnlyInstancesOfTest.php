<?php
use PHPUnit\Framework\TestCase;

class ContainsOnlyInstancesOfTest extends TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnlyInstancesOf('Foo', [new Foo(), new Bar(), new Foo()], 'Foo가 아닌 instance 가 있어서 실패');
    }
}

class Foo
{
}
class Bar
{
}
class Baz
{
}
