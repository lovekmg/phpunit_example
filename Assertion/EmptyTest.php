<?php
use PHPUnit\Framework\TestCase;

class EmptyTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEmpty(['foo'], '비어있지 않아서 실패');
    }
    public function testFailureNot()
    {
        $this->assertNotEmpty([], '비어있어서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeEmpty('pub', 'Atest', '비어있지 않아서 실패');
    }
    public function testFailureAttributeNot()
    {
        $this->assertAttributeNotEmpty('pri', 'Atest', '비어있어서 실패');
    }
}

class Atest
{
    public static $pub = [1];
    private static $pri = [];
}
