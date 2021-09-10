<?php


use LST\LSTCalendar;
use PHPUnit\Framework\TestCase;

class initialValuesTest extends TestCase
{

    public function testInitialYear()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(1,$lstCalendar->initialYear);
    }

    public function testInitialDay()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(1,$lstCalendar->initialDay);
    }

    public function testInitialCycle()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(1,$lstCalendar->initialCycle);
    }

    public function testInitialHour()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->initialHour);
    }

    public function testInitialMinute()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->initialMinute);
    }

    public function testInitialSecond()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->initialSecond);
    }
}
