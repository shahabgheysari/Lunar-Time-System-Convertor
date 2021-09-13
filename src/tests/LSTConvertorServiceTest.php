<?php

namespace LST;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class LSTConvertorServiceTest extends TestCase
{

    public function testConvertUtcToLstShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $lstConvertService = new LSTConvertorService();
        $lstConvertService->convertUTCtoLST('');
    }

    public function testConvertUtcToLstWithIncorrectInputShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $lstConvertService = new LSTConvertorService();
        $lstConvertService->convertUTCtoLST('2000-24-120 :21');
    }


    public function testConvertUtcToLstWithCorrectShouldNotThrowException()
    {
        $lstConvertService = new LSTConvertorService();
        $result = $lstConvertService->convertUTCtoLST('2000-11-12 12:45:20');
        $this->assertEquals(19,strlen($result));
    }

}
