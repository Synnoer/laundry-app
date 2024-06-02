<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper 
{ 
    public static function getNextTuesdayAndThursday()
    {
        $dates = [];
        $today = Carbon::today();

        // Add next Tuesday
        $nextTuesday = $today->next(Carbon::TUESDAY);
        if ($today->isTuesday()) {
            $nextTuesday = $today;
        }
        $dates[] = $nextTuesday->toDateString();

        // Add next Thursday
        $nextThursday = $today->next(Carbon::THURSDAY);
        if ($today->isThursday()) {
            $nextThursday = $today;
        }
        $dates[] = $nextThursday->toDateString();

        return $dates;
    }
}