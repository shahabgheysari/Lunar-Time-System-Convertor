<?php


namespace LST;


class LSTConvertor
{
    /**
     * @var Timestamp
     */
    private Timestamp $timestamp;

    /**
     * LSTConvertor constructor.
     * @param Timestamp $timestamp
     */
    public function __construct(Timestamp $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function convert(string $date)
    {
        $seconds = $this->timestamp->calculate($date);

        $year = (int) ($seconds / (new Year(1))->toTerrestrialSeconds());
        $seconds = $seconds % (new Year(1))->toTerrestrialSeconds();

        $day = (int) ($seconds / (new Day(1))->toTerrestrialSeconds());
        $seconds = $seconds % (new Day(1))->toTerrestrialSeconds();

        $cycle = (int) ($seconds / (new Cycle(1))->toTerrestrialSeconds());
        $seconds = $seconds % (new Cycle(1))->toTerrestrialSeconds();

        $hour = (int) ($seconds / (new Hour(1))->toTerrestrialSeconds());
        $seconds = $seconds % (new Hour(1))->toTerrestrialSeconds();

        $minute = (int) ($seconds / (new Minute(1))->toTerrestrialSeconds());
        $seconds = $seconds % (new Minute(1))->toTerrestrialSeconds();

        $second = (int) ($seconds / (new Second(1))->toTerrestrial());

        return new LTSDateTime($year+Year::getInitialYear(),$day+Day::getInitialDay(),$cycle+Cycle::getInitialCycle(),$hour,$minute,$second);
    }
}
