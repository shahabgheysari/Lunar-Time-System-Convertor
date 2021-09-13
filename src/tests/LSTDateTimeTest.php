<?php


namespace LST\tests;


use LST\LTSDateTime;
use PHPUnit\Framework\TestCase;

class LSTDateTimeTest extends TestCase
{

    public function testFormattedDateTime1()
    {
        $lstDateTime = new LTSDateTime(2,12,5,12,45,3);
        $this->assertEquals('2-12-05 12:45:03',$lstDateTime->getFormatted());
    }

    public function testFormattedDateTime2()
    {
        $lstDateTime = new LTSDateTime(2,2,5,3,4,0);
        $this->assertEquals('2-02-05 03:04:00',$lstDateTime->getFormatted());
    }


    public function testFormattedDateTime3()
    {
        $lstDateTime = new LTSDateTime(45,10,17,20,55,36);
        $this->assertEquals('45-10-17 20:55:36',$lstDateTime->getFormatted());
    }
}
