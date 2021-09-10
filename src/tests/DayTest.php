<?php


namespace LST\tests;


use PHPUnit\Framework\TestCase;
use LST\Day;
class DayTest extends TestCase
{
    public function testInitialDay()
    {
        $day = new Day();
        $this->assertEquals(1,$day->getInitialDay());
    }
}
