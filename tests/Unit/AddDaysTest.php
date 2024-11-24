<?php

namespace Biodun\PhpHelperMethods\Tests\Unit;

use Biodun\PhpHelperMethods\Tests\TestCase;
use Biodun\PhpHelperMethods\Helpers\Helper;

class AddDaysTest extends TestCase
{
    public function testPositiveDaysAddCorrectly(): void
    {
        $daysToAdd = 5;
        $expectedDate = date('Y-m-d', strtotime('+' . $daysToAdd . ' days'));
        $this->assertEquals($expectedDate, Helper::addDays($daysToAdd));
    }

    public function testZeroDaysReturnsSameDate(): void
    {
        $daysToAdd = 0;
        $expectedDate = date('Y-m-d', strtotime('+' . $daysToAdd . ' days'));
        $this->assertEquals($expectedDate, Helper::addDays($daysToAdd));
    }

    public function testNegativeDaysWorkCorrectly(): void
    {
        $daysToAdd = -5;
        $expectedDate = date('Y-m-d', strtotime($daysToAdd . ' days'));
        $this->assertEquals($expectedDate, Helper::addDays($daysToAdd));
    }
}
