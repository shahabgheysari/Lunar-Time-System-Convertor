<?php


namespace LST;


use DateTime;
use DateTimeZone;

class Timestamp
{
    public function calculate(string $date)
    {
        $dateTime = new DateTime($date,new DateTimeZone('UTC'));
        return $dateTime->getTimestamp() + $this->getTimeStampFromArmstrongLanding();
    }

    private function getTimeStampFromArmstrongLanding()
    {
        $time1969 = new DateTime('21-07-1969 02:56:15',new DateTimeZone('UTC'));
        return abs($time1969->getTimestamp());
    }
}
