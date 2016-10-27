<?php
use PHPUnit\Framework\TestCase;
//class DataTest extends TestCase
//{
    /**
     * @dataProvider provider
     */
    /*
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }

    public function provider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
    */
//}

require 'CsvFileIterator.php';
class DataTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }
    public function provider()
    {
        return new CsvFileIterator('data.csv');
    }
}
