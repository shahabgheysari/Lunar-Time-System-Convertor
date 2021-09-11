<?php


namespace LST;


class Year
{
    private int $initialYear = 1;
    private int $value;

    /**
     * Year constructor.
     * @param int $years
     */
    public function __construct(int $years)
    {
        $this->value = $years;
    }

    public function getInitialYear()
    {
        return $this->initialYear;
    }

    public function toTerrestrialSeconds()
    {
        return (new Day(12))->toTerrestrialSeconds() * $this->value;
    }

}
