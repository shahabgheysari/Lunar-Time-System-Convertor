<?php


namespace LST\tests;


use LST\LSTCalendar;
use PHPUnit\Framework\TestCase;

class InitialDateTest extends TestCase
{
    public function testInitialDate()
    {
        $lstCalendar = new LSTCalendar();
        self::assertEquals('1-1-1 0:0:0',$lstCalendar->getInitialDate());
    }
}
