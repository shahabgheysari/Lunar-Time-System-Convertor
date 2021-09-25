<?php


namespace App\Services;


use DateTime;
use Exception;
use InvalidArgumentException;

class InputModel
{
    private DateTime $dateTime;

    /**
     * InputModel constructor.
     * @param string $dateTime
     * @throws InvalidArgumentException|Exception
     */
    public function __construct(string $dateTime)
    {
        $this->validateDateTime($dateTime);
        $this->dateTime = new DateTime($dateTime);
    }

    private function validateDateTime(string $dateTime)
    {
        if (empty(trim($dateTime)) || !preg_match("/^\d\d\d\d-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01]) (00|0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/",$dateTime)) {
            throw new InvalidArgumentException('incorrect date time format.');
        }
        return true;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

}
