<?php


namespace LST;


class Minute
{
    private int $value;

    /**
     * Minute constructor.
     * @param int $minutes
     */
    public function __construct(int $minutes)
    {
        $this->value = $minutes;
    }

    public function toTerrestrialSeconds()
    {
        return (new Second($this->value * 60))->toTerrestrial();
    }
}
