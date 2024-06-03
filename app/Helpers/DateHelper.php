<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper 
{ 
    public static function getNextMondayAndThursday()
    {
        $dates = [];
        $today = Carbon::today();

        // Add next Monday
        $nextMonday = $today->next(Carbon::MONDAY);
        if ($today->isMonday()) {
            $nextMonday = $today;
        }
        $dates[] = $nextMonday->toDateString();

        // Add next Thursday
        $nextThursday = $today->next(Carbon::THURSDAY);
        if ($today->isThursday()) {
            $nextThursday = $today;
        }
        $dates[] = $nextThursday->toDateString();

        return $dates;
    }
}