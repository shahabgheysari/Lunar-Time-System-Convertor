<?php


namespace LST;


use InvalidArgumentException;

class Minute
{
    private int $value;

    /**
     * Minute constructor.
     * @param int $minutes
     */
    public function __construct(int $minutes)
    {
        if($minutes < 0 || $minutes > 60)
            throw new InvalidArgumentException('minute is out of range');
        $this->value = $minutes;
    }

    public function toTerrestrialSeconds()
    {
        return (new Second(60))->toTerrestrial() * $this->value;
    }
}
