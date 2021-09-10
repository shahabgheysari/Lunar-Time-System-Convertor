<?php


namespace LST\tests;


use LST\Minute;
use LST\Second;
use PHPUnit\Framework\TestCase;

class MinuteTest extends TestCase
{
    public function testOneMinuteToTerrestrialSeconds()
    {
        $oneMinute = new Minute(1);
        $this->assertEquals(59.061178000026,$oneMinute->toTerrestrialSeconds());
    }

    public function testTwoMinutesToTerrestrialSeconds()
    {
        $twoMinutes = new Minute(2);
        $this->assertEquals((new Second(120))->toTerrestrial(),$twoMinutes->toTerrestrialSeconds());
    }

    public function testOneHundredMinutesToTerrestrialSeconds()
    {
        $oneHundredMinutes = new Minute(100);
        $this->assertEquals(5906.1178000026,$oneHundredMinutes->toTerrestrialSeconds());
    }

}
