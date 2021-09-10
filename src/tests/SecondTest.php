<?php


namespace LST\tests;


use InvalidArgumentException;
use LST\Second;
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testNegativeSecondExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Second(-1);
    }

    public function test61SecondsExceptionWillBeThrown()
    {
        $this->expectException(InvalidArgumentException::class);
        new Second(61);
    }
    public function testConversionOfZeroLunarSecondToTerrestrial()
    {
        $second = new Second(0);
        $this->assertEquals(0.0,$second->toTerrestrial());
    }

    public function testConversionOfOneLunarSecondToTerrestrial()
    {
        $second = new Second(1);
        $this->assertEquals(0.9843529666671,$second->toTerrestrial());
    }

    public function testConversionOfTwoLunarSecondToTerrestrial()
    {
        $second = new Second(2);
        $this->assertEquals(1.9687059333342,$second->toTerrestrial());
    }

    public function testConversionOfFiveLunarSecondToTerrestrial()
    {
        $second = new Second(5);
        $this->assertEquals(4.9217648333355,$second->toTerrestrial());
    }

}
