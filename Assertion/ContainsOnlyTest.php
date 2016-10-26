<?php
use PHPUnit\Framework\TestCase;

class ContainsOnlyTest extends TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnly('string', ['1', '2', 3], 'string이 아닌게 있어서 실패');
    }
    public function testFailureNot()
    {
        $this->assertNotContainsOnly('string', ['1', '2', '3'], '모두 string이어서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeContainsOnly('string', 'pub', 'Atest', 'string이 아닌게 있어서 실패');
    }
    public function testFailureAttributeNot()
    {
        $this->assertAttributeNotContainsOnly('string', 'pri', 'Atest', '모두 string이어서 실패');
    }
}

class Atest
{
    public static $pub = ['1', '2', 3];
    protected static $pro = [4, 5, 6];
    private static $pri = ['7', '8', '9'];
}
