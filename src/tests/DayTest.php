<?php


namespace LST\tests;


use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use LST\Day;
class DayTest extends TestCase
{
    public function testZeroDayExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Day(0);
    }

    public function test13DaysExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Day(13);
    }
    public function testInitialDay()
    {
        $day = new Day(1);
        $this->assertEquals(1,$day->getInitialDay());
    }

    public function testTwoDaysToTerrestrialSeconds()
    {
        $oneDay = new Day(2);
        $this->assertEquals(5102885.7792022464,$oneDay->toTerrestrialSeconds());
    }


    public function testFormattedWithLeadingZero()
    {
        $day = new Day(2);
        $this->assertEquals('02',$day->getFormatted());
    }

    public function testFormattedWithoutLeadingZero()
    {
        $day = new Day(12);
        $this->assertEquals('12',$day->getFormatted());
    }
}
