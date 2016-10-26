<?php
use PHPUnit\Framework\TestCase;

class CountTest extends TestCase
{
    public function testFailure()
    {
        $test = 0;
        $this->assertCount($test, ['foo'], "count가 {$test}이 아니라서 실패");
    }
    public function testFailureNot()
    {
        $test = 0;
        $this->assertNotCount($test, [], "count가 {$test}이 맞아서 실패");
    }
}
