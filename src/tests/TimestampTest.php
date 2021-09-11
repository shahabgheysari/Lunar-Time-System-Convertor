<?php
namespace LST\tests;


use LST\Timestamp;
use PHPUnit\Framework\TestCase;

class TimestampTest extends TestCase
{
    public function testTimestampFromArmstrongLandingTo21July2020TwelveClock()
    {
        $timestamp = new Timestamp();
        $this->assertEquals(1609491825,$timestamp->calculate('2020-07-21 12:00:00'));
    }

    public function testTimestampFromArmstrongLandingTo12January1996ThreeClock()
    {
        $timestamp = new Timestamp();
        $this->assertEquals(835574625,$timestamp->calculate('1996-01-12 03:00:00'));
    }
}
