<?php


namespace LST;


use InvalidArgumentException;

class Second
{
    private float $terrestrialConversionRate = 0.9843529666671;
    /**
     * @var int
     */
    private int $value;

    /**
     * Second constructor.
     * @param int $seconds
     */
    public function __construct(int $seconds)
    {
        if($seconds < 0 || $seconds > 60)
            throw new InvalidArgumentException('second is out of range');
        $this->value = $seconds;
    }

    public function toTerrestrial()
    {
        return round($this->terrestrialConversionRate * $this->value,13);
    }
}
