<?php
//class DataTest extends PHPUnit_Framework_TestCase
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
class DataTest extends PHPUnit_Framework_TestCase
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
