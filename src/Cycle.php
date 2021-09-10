<?php


namespace LST;


use InvalidArgumentException;

class Cycle
{

    private int $initialCycle = 1;
    private int $value;

    /**
     * Cycle constructor.
     * @param int $cycles
     */
    public function __construct(int $cycles)
    {
        if ($cycles <=0 || $cycles > 30)
            throw new InvalidArgumentException('cycle is out of range');
        $this->value = $cycles;
    }

    public function getInitialCycle()
    {
        return $this->initialCycle;
    }

    public function toTerrestrialSeconds()
    {
        return (new Hour(24))->toTerrestrialSeconds() * $this->value;
    }
}
