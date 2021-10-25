<?php

namespace App\Schedular\Traits;

trait Dates
{
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
}
