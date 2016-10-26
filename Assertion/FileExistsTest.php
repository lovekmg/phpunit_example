<?php
use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertFileExists(__DIR__.'/EmptyTest2.php', '파일이 존재하지 않아서 실패');
    }
    public function testFailureNot()
    {
        $this->assertFileNotExists(__DIR__.'/EmptyTest.php', '파일이 존재해서 실패');
    }
}
