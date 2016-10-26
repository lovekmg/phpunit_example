<?php
use PHPUnit\Framework\TestCase;

class InternalTypeTest extends TestCase
{
    public function testFailure()
    {
        $this->assertInternalType('string', 42, 'string이 아니라서 실패');
    }
    public function testFailureNot()
    {
        $this->assertNotInternalType('string', '42', 'string이라서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeInternalType('string', 'pub', 'Atest', 'string이 아니라서 실패');
    }
    public function testFailureAttributeNot()
    {
        $this->assertAttributeNotInternalType('string', 'pri', 'Atest', 'string이라서 실패');
    }
}

class Atest
{
    public static $pub = 1;
    private static $pri = '2';
}
