<?php
use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEquals(1, 0, '같지 않아서 실패');
    }
    public function testFailure2()
    {
        $this->assertNotEquals('bar', 'bar', '같아서 실패');
    }
    public function testFailure3()
    {
        $this->assertEquals("foo\nbar\nbaz\n", "foob\nar\nbaz\n", '같지 않아서 실패');
    }
    public function testFailureAttribute()
    {
        $this->assertAttributeEquals(0, 'pub', 'Atest', '같지 않아서 실패');
    }
    public function testFailureAttribute2()
    {
        $this->assertAttributeNotEquals(2, 'pro', 'Atest', '같아서 실패');
    }
    public function testFailureAttributeNot()
    {
        $this->assertAttributeNotEquals("i\nam", 'pri', 'Atest', '같아서 실패');
    }
    public function testSuccessFloat()
    {
        $this->assertNotEquals(1.0, 1.1, '0.2 오차 범위 이내라서 실패', 0.2);
    }
    public function testFailureFloat()
    {
        $this->assertEquals(1.0, 1.1, '오차가 있어서 실패');
    }

    public function testFailureDOMDocument()
    {
        $expected = new DOMDocument;
        $expected->loadXML('<foo><bar/></foo>');
        $actual = new DOMDocument;
        $actual->loadXML('<bar><foo/></bar>');
        $this->assertEquals($expected, $actual, '2개의 DOMDocument가 달라서 실패');
    }

    public function testFailureObjectAttribute()
    {
        $expected = new stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';
        $actual = new stdClass;
        $actual->foo = 'bar';
        $actual->bar = 'bar';
        $this->assertEquals($expected, $actual, '2개의 object가 달라서 실패');
    }

    public function testFailureArray()
    {
        $this->assertEquals([1, 2], [2, 3], '2개의 array가 달라서 실패');
    }
    public function testFailureArray2()
    {
        $this->assertEquals([1, 2], [2, 1], '2개의 array 순서가 달라서 실패');
    }
}

class Atest
{
    public static $pub = 1;
    protected static $pro = '2';
    private static $pri = "i\nam";
}
