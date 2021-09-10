<?php


namespace LST\tests;


use LST\Second;
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testConversionOfZeroLunarSecondToTerrestrial()
    {
        $second = new Second(0);
        $this->assertEquals(0.0,$second->getTerrestrial());
    }

    public function testConversionOfOneLunarSecondToTerrestrial()
    {
        $second = new Second(1);
        $this->assertEquals(0.9843529666671,$second->getTerrestrial());
    }

    public function testConversionOfTwoLunarSecondToTerrestrial()
    {
        $second = new Second(2);
        $this->assertEquals(1.9687059333342,$second->getTerrestrial());
    }

    public function testConversionOfFiveLunarSecondToTerrestrial()
    {
        $second = new Second(5);
        $this->assertEquals(4.9217648333355,$second->getTerrestrial());
    }

}
