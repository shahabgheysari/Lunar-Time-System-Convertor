<?php


namespace LST;


class LSTCalendar
{
    public $initialYear;
    public $initialDay = 1;
    public $initialCycle = 1;
    public $initialHour = 0;
    public $initialMinute = 0;
    public $initialSecond = 0;

    /**
     * LSTCalendar constructor.
     */
    public function __construct()
    {
        $this->initialYear = new Year();
        $this->initialDay = new Day();
        $this->initialCycle = new Cycle(1);
    }

    public function getInitialDate()
    {
        return "{$this->initialYear->getInitialYear()}-{$this->initialDay->getInitialDay()}-{$this->initialCycle->getInitialCycle()} {$this->initialHour}:{$this->initialMinute}:{$this->initialSecond}";
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
        return "{$this->initialYear->getInitialYear()}-0{$this->initialDay->getInitialDay()}-0{$this->initialCycle->getInitialCycle()} " .
            "0{$this->initialHour}:0{$this->initialMinute}:0{$this->initialSecond}";

    }
}
