<?php


namespace App\Services;


use DateInterval;
use DateTime;
use Exception;
use InvalidArgumentException;
use LST\LSTConvertorService;

class LSTService
{
    /**
     * @var LSTConvertorService
     */
    private LSTConvertorService $LSTConvertorService;


    /**
     * LSTService constructor.
     * @param LSTConvertorService $LSTConvertorService
     */
    public function __construct(LSTConvertorService $LSTConvertorService)
    {

        $this->LSTConvertorService = $LSTConvertorService;
    }

    public function convertUTCDateTime(string $dateTime)
    {
        try {
            $this->validateDateTime($dateTime);
            $dateTime = new DateTime($dateTime);
            if (isset($dateTime)) $dateTime->add(new DateInterval('P4D'));
            return $this->LSTConvertorService->convertUTCtoLST($dateTime->format('Y-m-d H:i:s'));
        } catch (Exception $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
    }

    private function validateDateTime(string $dateTime)
    {
        if (empty(trim($dateTime)) || !preg_match("/^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$/",$dateTime))
            throw new InvalidArgumentException('incorrect date time format.');
    }
}
