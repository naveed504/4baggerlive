<?php

namespace App\Schedular;
use App\Schedular\Traits\Dates;
use App\Schedular\Traits\Matches;
const SCHEDULED_TIMES_AVAILABLE = array(
    '7:00 AM',
    '10:30 AM',
    '02:00 PM',
    '05:30 PM',
    '09:00 PM',
);

class RoundRobin
{
    /**
     * Class RoundRobin
     * Special Class for Round Robin Event Formatting
     *
     * @author Tayyeb Hassan < https://www.github.com/haxxan21 >
     * @since Sept 27, 2021
     */

    use Dates, Matches;

    /**
     * @property Array Teams in the tournament
     */

    public $teams;

    /**
     * @property Array Scheduled Matches
     */

    public $schedule;

    public function __construct($teams)
    {
        $this->teams = $teams;
    }

    /**
     * create event group matches without home/away format
     *
     * @return $this
     */
    public function buildWithoutLeg()
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
     * create event group matches with home/away format
     *
     * @return $this
     */
    public function buildWithLeg()
    {
        $result = [];

        foreach ($this->teams as $team) {
            for ($i = 0; $i < count($this->teams); $i++) {
                if ($team !== $this->teams[$i]) {
                    $result[] = [
                        'team' => $team,
                        'opponent' => $this->teams[$i]
                    ];
                }
            }
        }

        $this->matches = $result;
        return $this;
    }

    /**
     * Schedule Matches
     *
     * @return array Matches Schedule
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
                        $match['scheduled_time'] = SCHEDULED_TIMES_AVAILABLE[random_int(0, 4)];
                        $match['scheduled_date'] = $this->dates[$index];
                        return $match;
                    }, $matches);
                }
            }
        }

        return $this->schedule;
    }
}
