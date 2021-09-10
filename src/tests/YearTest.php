<?php


namespace LST\tests;


use LST\Year;
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testInitialYear()
    {
        $year = new Year();
        $this->assertEquals(1,$year->getInitialYear());
    }
}
