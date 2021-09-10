<?php


namespace LST;


use InvalidArgumentException;

class Hour
{
    private int $value;

    /**
     * Hour constructor.
     * @param int $hours
     */
    public function __construct(int $hours)
    {
        if ($hours < 0 || $hours > 24)
            throw new InvalidArgumentException('hour is out of range');
        $this->value = $hours;
    }

    public function toTerrestrialSeconds()
    {
        return (new Minute(60))->toTerrestrialSeconds() * $this->value;
    }


}
