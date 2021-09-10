<?php


namespace LST\tests;


use LST\Cycle;
use PHPUnit\Framework\TestCase;

class CycleTest extends TestCase
{

    public function testInitialCycle()
    {
        $cycle = new Cycle();
        $this->assertEquals(1,$cycle->getInitialCycle());
    }
}
