<?php


namespace LST;


use InvalidArgumentException;

class LSTConvertorService
{
    public function convertUTCtoLST(string $dateTime)
    {
        $convertor = new LSTConvertor(new Timestamp());
        if (empty(trim($dateTime)) || !preg_match("/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/", $dateTime))
            throw new InvalidArgumentException('incorrect date time format.');
        return $convertor->convert($dateTime)->getFormatted();
    }

}
