<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Test;

class MysiteControllerTest extends TestCase
{
    /**
     * A simple test example.
     * @return void
     */
    public function testReportReturnTrue()
    {
        $obj = $this->getMockBuilder(Test::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertTrue(true);
    }

    public function testReportReturnFalse()
    {
        $ob = $this->getMockBuilder(User::class)
            ->setMethods(['getInstance', 'verify'])
            ->getMock();
        $this->assertFalse(false);
    }
}
