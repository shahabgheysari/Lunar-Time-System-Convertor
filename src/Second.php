<?php


namespace LST;


class Second
{
    private $terrestrialConversionRate = 0.9843529666671;
    /**
     * @var int
     */
    private $value;

    /**
     * Second constructor.
     * @param int $seconds
     */
    public function __construct(int $seconds)
    {
        $this->value = $seconds;
    }

    public function getTerrestrial()
    {
        return round($this->terrestrialConversionRate * $this->value,13);
    }
}
