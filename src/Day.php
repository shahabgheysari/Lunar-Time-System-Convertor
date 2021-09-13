<?php


namespace LST;


use InvalidArgumentException;

class Day
{

    private static $initialDay = 1;
    private int $value;

    /**
     * Day constructor.
     * @param int $days
     */
    public function __construct(int $days)
    {
        if ($days <=0 || $days > 12)
            throw new InvalidArgumentException('day is out of range');
        $this->value = $days;
    }

    public static function getInitialDay()
    {
        return self::$initialDay;
    }

    public function toTerrestrialSeconds()
    {
        return (new Cycle(30))->toTerrestrialSeconds() * $this->value;
    }

    public function getFormatted()
    {
        return sprintf("%'.02d", $this->value);
    }
}
