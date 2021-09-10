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

    /**
     * @return int
     */
    public function getInitialYear(): int
    {
        return $this->initialYear;
    }

    /**
     * @return int
     */
    public function getInitialDay(): int
    {
        return $this->initialDay;
    }

    /**
     * @return int
     */
    public function getInitialCycle(): int
    {
        return $this->initialCycle;
    }

    /**
     * @return int
     */
    public function getInitialHour(): int
    {
        return $this->initialHour;
    }

    /**
     * @return int
     */
    public function getInitialMinute(): int
    {
        return $this->initialMinute;
    }

    /**
     * @return int
     */
    public function getInitialSecond(): int
    {
        return $this->initialSecond;
    }

    public function formattedInitialDate()
    {
        return "{$this->initialYear}-0{$this->initialDay}-0{$this->initialCycle} " .
            "0{$this->initialHour}:0{$this->initialMinute}:0{$this->initialSecond}";

    }
}
