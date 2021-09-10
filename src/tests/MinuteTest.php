<?php


namespace LST\tests;


use InvalidArgumentException;
use LST\Minute;
use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public function testZeroMinuteExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Minute(-1);
    }

    public function test61MinutesExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Minute(61);
    }

    public function testOneMinuteToTerrestrialSeconds()
    {
        $oneMinute = new Minute(1);
        $this->assertEquals(59.061178000026,$oneMinute->toTerrestrialSeconds());
    }

    public function testTwoMinutesToTerrestrialSeconds()
    {
        $twoMinutes = new Minute(2);
        $this->assertEquals(118.122356000052,$twoMinutes->toTerrestrialSeconds());
    }

    public function testSixtyMinutesToTerrestrialSeconds()
    {
        $sixtyMinutes = new Minute(60);
        $this->assertEquals(3543.67068000156,$sixtyMinutes->toTerrestrialSeconds());
    }

}
