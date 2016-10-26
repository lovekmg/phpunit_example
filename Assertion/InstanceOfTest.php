<?php
/**
 * todo assertAttributeInstanceOf 는 어찌해야할라나
 * todo assertAttributeNotInstanceOf 는 어찌해야할라나
 */
use PHPUnit\Framework\TestCase;

class InstanceOfTest extends TestCase
{
    public function testFailure()
    {
        $this->assertInstanceOf('RuntimeException', new Exception, 'Exception이 RuntimeException 의 instance가 아니라 실패');
    }
    public function testFailureNot()
    {
        $this->assertNotInstanceOf('RuntimeException', new RuntimeException, '동일 instance라 실패');
    }
}
