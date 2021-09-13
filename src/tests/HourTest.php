<?php


namespace LST\tests;


use InvalidArgumentException;
use LST\Hour;
use PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testNegativeHourExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Hour(-1);
    }

    public function test25HoursExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Hour(25);
    }

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

    public function testTwentyHoursToTerrestrialSeconds()
    {
        $twentyHours = new Hour(20);
        $this->assertEquals(70873.4136000312,$twentyHours->toTerrestrialSeconds());
    }


    public function testFormattedWithLeadingZero()
    {
        $hour = new Hour(2);
        $this->assertEquals('02',$hour->getFormatted());
    }

    public function testFormattedWithoutLeadingZero()
    {
        $hour = new Hour(12);
        $this->assertEquals('12',$hour->getFormatted());
    }

}
