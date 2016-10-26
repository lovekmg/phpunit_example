<?php
use PHPUnit\Framework\TestCase;

class GreaterThanOrEqualTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertGreaterThanOrEqual(2, 2, '2가 2보다 크거나 같지 않아서 실패');
    }
    public function testFailure()
    {
        $this->assertGreaterThanOrEqual(2, 1, '1이 2보다 크거나 같지 않아서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeGreaterThanOrEqual(2, 'pub', 'Atest', '1이 2보다 크거나 같지 않아서 실패');
    }
}

class Atest
{
    public static $pub = 1;
    private static $pri = 2;
}
