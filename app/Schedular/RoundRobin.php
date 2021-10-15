<?php

namespace App\Schedular;

class RoundRobin
{

    /**
     * @property Array Teams in the tournament
     */

    public $teams;

    /**
     * @property Array Scheduled Matches
     */

    public $schedule;

    /**
     * @property Array Matches in the tournament
     */

    public $matches;

    /**
     * @property string Event Start Date
     */
    protected $startDate;

    /**
     * @property string Event End Date
     */
    protected $endDate;

    /**
     * @property int day difference
     */
    public $days;

    /**
     * @property array dates
     */
    public $dates;

    /**
     * @property Constant timeSlots available
     */
    const SCHEDULED_TIMES_AVAILABLE = array(
        '7:00 AM',
        '10:30 AM',
        '02:00 PM',
        '05:30 PM',
        '09:00 PM',
    );

    /**
     * Get days difference within provided dates
     *
     * @param string Event Start Date
     * @param string Event End Date
     *
     * @return $this
     */
    public function setDates($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $earlier = new \DateTime($startDate);
        $later = new \DateTime($endDate);
        $this->days = $later->diff($earlier)->format("%a");
        $this->getAllDates();
        return $this;
    }

    /**
     * Get all dates within specified period
     *
     * @return $this
     */
    public function getAllDates()
    {
        $this->dates = array();

        for ($i = 0; $i < $this->days; $i++) {
            $this->dates[] = date('Y-m-d', strtotime($this->startDate . "+{$i} days"));
        }

        return $this;
    }

    /**
     * Set teams to create event schedule
     *
     * @return $this
     */
    public function setTeams(array $teams)
    {
        $this->teams = $teams;
    }

    /**
     * @return array all matches
     */
    public function getMatches()
    {
        return isset($this->matches)
            ? $this->matches
            : null;
    }

    /**
     * create event group matches without home/away format
     *
     * @return $this
     */
    public function build()
    {
        $result = [];

        foreach ($this->teams as $key => $team) {
            for ($i = $key + 1; $i < count($this->teams); $i++) {
                $result[] = [
                    'team' => $team,
                    'opponent' => $this->teams[$i]
                ];
            }
        }

        $this->matches = $result;
        return $this;
    }

    /**
     * Schedule Event Group Matches for Each Group
     *
     * @param
     * @return
     */
    public function schedule()
    {
        $matchChunk = array_chunk($this->getMatches(), 4, true);

        for ($i = 0; $i < $this->days; $i++) {
            if (count($matchChunk) > $this->days) {
                return "Cannot Create Schedule With Provided Days. Please Extend the limit";
                break;
            } else {
                foreach ($matchChunk as $index => $matches) {
                    $day = $index + 1;
                    $this->schedule["day-{$day}"] = array_map(function ($match) use ($index) {
                        $match['scheduled_time'] = $this->SCHEDULED_TIMES_AVAILABLE[random_int(0, 4)];
                        $match['scheduled_date'] = $this->dates[$index];
                        return $match;
                    }, $matches);
                }
            }
        }

        return $this->schedule;
    }
}
