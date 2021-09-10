<?php


namespace LST;


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
        $this->value = $seconds;
    }

    public function toTerrestrial()
    {
        return round($this->terrestrialConversionRate * $this->value,13);
    }
}
