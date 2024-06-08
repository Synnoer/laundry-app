<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper 
{ 
    public static function getNextMondayAndThursday()
    {
        $dates = [];
        $today = Carbon::today();

        // Calculate next Monday
        if ($today->isMonday()) {
            $nextMonday = $today;
        } elseif ($today->isAfter($today->copy()->startOfWeek())) {
            $nextMonday = $today->copy()->startOfWeek()->addWeek();
        } else {
            $nextMonday = $today->copy()->startOfWeek();
        }

        // Calculate next Thursday
        if ($today->isThursday()) {
            $nextThursday = $today;
        } elseif ($today->isAfter($today->copy()->startOfWeek()->addDays(3))) {
            $nextThursday = $today->copy()->startOfWeek()->addDays(3)->addWeek();
        } else {
            $nextThursday = $today->copy()->startOfWeek()->addDays(3);
        }

        // Add dates to array
        $dates[] = $nextMonday->toDateString();
        $dates[] = $nextThursday->toDateString();

        return $dates;
    }
}