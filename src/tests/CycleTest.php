<?php


namespace LST\tests;


use InvalidArgumentException;
use LST\Cycle;
use PHPUnit\Framework\TestCase;

class CycleTest extends TestCase
{

    public function testZeroCycleIsExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Cycle(0);
    }

    public function test31CycleIsExceptionWillBeThrown()
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

    public function testTwentyNineCyclesToTerrestrialSeconds()
    {
        $TwentyNineCycles = new Cycle(29);
        $this->assertEquals(2466394.79328108576,$TwentyNineCycles->toTerrestrialSeconds());
    }
}
