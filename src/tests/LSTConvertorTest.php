<?php


namespace LST\tests;


use LST\LSTConvertor;

use LST\Timestamp;
use PHPUnit\Framework\TestCase;

class LSTConvertorTest extends TestCase
{

    public function test1969IsConvertedToYear0()
    {
        $lstConvertor = new LSTConvertor(new Timestamp());
        $this->assertEquals('0-0-0 0:0:0',$lstConvertor->convert('1969-07-21 02:56:15'));
    }

    public function test1970IsConvertedToYear1()
    {
        $lstConvertor = new LSTConvertor(new Timestamp());
        $this->assertEquals('32-0-6 2:12:25',$lstConvertor->convert('2000-08-12 20:45:30'));
    }
}
