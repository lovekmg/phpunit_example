<?php
use PHPUnit\Framework\TestCase;

class ContainsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertContains(4, [1, 2, 3], '포함하지 않아서 실패');
    }
    public function testFailureNot()
    {
        $this->assertNotContains(2, [1, 2, 3], '포함해서 실패');
    }
    public function testFailureString()
    {
        $this->assertContains('baz', 'foobar', '포함하지 않아서 실패');
    }
    public function testFailureStringNot()
    {
        $this->assertNotContains('bar', 'foobar', '포함해서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeContains(4, 'pri', 'Atest', '포함하지 않아서 실패');
    }
    public function testFailureAttributeNot()
    {
        $this->assertAttributeNotContains(4, 'pro', 'Atest', '포함해서 실패');
    }
}

class Atest
{
    public static $pub = [1, 2, 3];
    protected static $pro = [4, 5, 6];
    private static $pri = [7, 8, 9];
}
