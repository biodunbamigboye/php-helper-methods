<?php

namespace Biodun\PhpHelperMethods\Tests\Unit;

use Biodun\PhpHelperMethods\Tests\TestCase;

class AddDaysTest extends TestCase
{
    public function testPositiveDaysAddCorrectly()
    {
        $daysToAdd = 5;
        $expectedDate = date('Y-m-d', strtotime('+' . $daysToAdd . ' days'));
        $this->assertEquals($expectedDate, addDays($daysToAdd));
    }

    public function testZeroDaysReturnsSameDate()
    {
        $daysToAdd = 0;
        $expectedDate = date('Y-m-d', strtotime('+' . $daysToAdd . ' days'));
        $this->assertEquals($expectedDate, addDays($daysToAdd));
    }

    public function testNegativeDaysWorkCorrectly()
    {
        $daysToAdd = -5;
        $expectedDate = date('Y-m-d', strtotime($daysToAdd . ' days'));
        $this->assertEquals($expectedDate, addDays($daysToAdd));
    }
}
