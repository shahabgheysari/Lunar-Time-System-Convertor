<?php


namespace LST;


class LSTCalendar
{
    public $initialYear = 1;
    public $initialDay = 1;
    public $initialCycle = 1;
    public $initialHour = 0;
    public $initialMinute = 0;
    public $initialSecond = 0;

    public function getInitialDate()
    {
        return "{$this->initialYear}-{$this->initialDay}-{$this->initialCycle} {$this->initialHour}:{$this->initialMinute}:{$this->initialSecond}";
    }
}
