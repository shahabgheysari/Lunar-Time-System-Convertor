<?php


namespace LST;


class LTSDateTime
{
    /**
     * @var Year
     */
    private Year $year;
    /**
     * @var Day
     */
    private Day $day;
    private Cycle $cycle;
    private Hour $hour;
    private Minute $minute;
    private Second $second;

    /**
     * LTSDateTime constructor.
     * @param int $year
     * @param int $day
     * @param int $cycle
     * @param int $hour
     * @param int $minute
     * @param int $second
     */
    public function __construct(int $year, int $day, int $cycle, int $hour, int $minute, int $second)
    {
        $this->year = new Year($year);
        $this->day = new Day($day);
        $this->cycle = new Cycle($cycle);
        $this->hour = new Hour($hour);
        $this->minute = new Minute($minute);
        $this->second = new Second($second);
    }

    public function getFormatted()
    {
        return "{$this->formatDate()} {$this->formatTime()}";
    }

    private function formatDate()
    {
        return "{$this->year->getValue()}-{$this->day->getFormatted()}-{$this->cycle->getFormatted()}";
    }

    private function formatTime()
    {
        return "{$this->hour->getFormatted()}:{$this->minute->getFormatted()}:{$this->second->getFormatted()}";
    }
}
