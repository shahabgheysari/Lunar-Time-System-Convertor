<?php


use LST\LSTCalendar;
use PHPUnit\Framework\TestCase;

class InitialValuesTest extends TestCase
{

    public function testInitialHour()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->getInitialHour());
    }

    public function testInitialMinute()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->getInitialMinute());
    }

    public function testInitialSecond()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals(0,$lstCalendar->getInitialSecond());
    }
}
