<?php


namespace LST\tests;


use LST\Hour;
use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testZeroHourToTerrestrialSeconds()
    {
        $zeroHour = new Hour(0);
        $this->assertEquals(0,$zeroHour->toTerrestrialSeconds());
    }

    public function testOneHourToTerrestrialSeconds()
    {
        $oneHour = new Hour(1);
        $this->assertEquals(3543.67068000156,$oneHour->toTerrestrialSeconds());
    }

    public function testTwoHoursToTerrestrialSeconds()
    {
        $twoHours = new Hour(2);
        $this->assertEquals(7087.34136000312,$twoHours->toTerrestrialSeconds());
    }

    public function testFiftyHoursToTerrestrialSeconds()
    {
        $fiftyHours = new Hour(50);
        $this->assertEquals(177183.534000078,$fiftyHours->toTerrestrialSeconds());
    }

}
