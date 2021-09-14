<?php


namespace LST;


use InvalidArgumentException;

class LSTConvertorService
{
    public function convertUTCtoLST(string $dateTime)
    {
        $convertor = new LSTConvertor(new Timestamp());
        if (empty(trim($dateTime)) || !preg_match("/^\d\d\d\d-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01]) (00|0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $dateTime)) {
            throw new InvalidArgumentException('incorrect date time format.');
        }
        return $convertor->convert($dateTime)->getFormatted();
    }

}
