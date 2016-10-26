<?php
use PHPUnit\Framework\TestCase;

class FileEqualsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertFileEquals(__DIR__.'/EmptyTest.php', __DIR__.'/FalseTest.php', '파일이 달라서 실패');
    }
}
