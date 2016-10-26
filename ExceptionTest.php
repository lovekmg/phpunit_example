<?php
// 주석으로 예외 발생
//class ExceptionTest extends PHPUnit_Framework_TestCase
//{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    /*
    public function testExceptionHasRightMessage()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }
    */

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionCode 20
     */
    /*
    public function testExceptionHasRightCode()
    {
        throw new InvalidArgumentException('Some Message2', 10);
    }
    */
//}

/* method로 예외 발생
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
    }
    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message라고 하네');
        throw new InvalidArgumentException('Some Message를 가지고 있지', 10);
    }
    public function testExceptionHasRightCode()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message2 라네', 20);
        throw new InvalidArgumentException('The Right Message를 가지고 있지', 10);
    }
}
*/
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        try {
        } catch (InvalidArgumentException $expected) {
            return;
        }
        $this->fail('예상한 예외가 발생하지 않았습니다.');
    }
}
