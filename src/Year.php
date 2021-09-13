<?php


namespace LST;


class Year
{
    private static int $initialYear = 1;
    private int $value;

    /**
     * Year constructor.
     * @param int $years
     */
    public function __construct(int $years)
    {
        $this->value = $years;
    }

    public static function getInitialYear()
    {
        return self::$initialYear;
    }

    public function toTerrestrialSeconds()
    {
        return (new Day(12))->toTerrestrialSeconds() * $this->value;
    }

    public function getValue()
    {
        return $this->value;
    }

}
