<?php
use PHPUnit\Framework\TestCase;

class GreaterThanTest extends TestCase
{
    public function testFailure()
    {
        $this->assertGreaterThan(2, 1, '1이 2보다 크지 않아서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeGreaterThan(2, 'pub', 'Atest', '1이 2보다 크지 않아서 실패');
    }
    public function testFailureAttribute2()
    {
        $this->assertAttributeGreaterThan(2, 'pri', 'Atest', '2가 2보다 크지 않아서 실패');
    }
}

class Atest
{
    public static $pub = 1;
    private static $pri = 2;
}
