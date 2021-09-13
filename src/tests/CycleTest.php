<?php


namespace LST\tests;


use InvalidArgumentException;
use LST\Cycle;
use PHPUnit\Framework\TestCase;

class CycleTest extends TestCase
{

    public function testZeroCycleExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Cycle(0);
    }

    public function test31CyclesExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Cycle(31);
    }

    public function testInitialCycle()
    {
        $cycle = new Cycle(1);
        $this->assertEquals(1,$cycle->getInitialCycle());
    }

    public function testOneCycleToTerrestrialSeconds()
    {
        $oneCycle = new Cycle(1);
        $this->assertEquals(85048.09632003744,$oneCycle->toTerrestrialSeconds());
    }

    public function testTwoCyclesToTerrestrialSeconds()
    {
        $twoCycles = new Cycle(2);
        $this->assertEquals(170096.19264007488,$twoCycles->toTerrestrialSeconds());
    }

    public function testThirtyCyclesToTerrestrialSeconds()
    {
        $thirtyCycles = new Cycle(30);
        $this->assertEquals(2551442.8896011232,$thirtyCycles->toTerrestrialSeconds());
    }

    public function testFormattedWithLeadingZero()
    {
        $cycle = new Cycle(2);
        $this->assertEquals('02',$cycle->getFormatted());
    }

    public function testFormattedWithoutLeadingZero()
    {
        $cycle = new Cycle(12);
        $this->assertEquals('12',$cycle->getFormatted());
    }
}
