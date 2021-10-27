<?php

namespace App\Schedular\Traits;

trait Matches
{
    /**
     * @property Array Matches in the tournament
     */

    public $matches;

    /**
     * @return array all matches
     */
    public function getMatches()
    {
        return isset($this->matches)
            ? $this->matches
            : null;
    }
}
