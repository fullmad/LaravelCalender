<?php namespace Calender\LaravelFullcalendar;

use DateTime;

interface Event
{

    public function getEventOptions();
    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay();

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart();

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd();

}