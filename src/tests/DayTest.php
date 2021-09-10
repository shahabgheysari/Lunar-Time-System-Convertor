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
}
