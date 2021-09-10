<?php


namespace LST;


class Hour
{
    private int $value;

    /**
     * Hour constructor.
     * @param int $hours
     */
    public function __construct(int $hours)
    {
        $this->value = $hours;
    }

    public function toTerrestrialSeconds()
    {
        return (new Minute($this->value * 60))->toTerrestrialSeconds();
    }


}
