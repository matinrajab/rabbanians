<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateFormatter
{
    public static function startToEnd($startDate, $endDate)
    {
        $start = Carbon::createFromFormat('Y-m-d', $startDate);
        $end = Carbon::createFromFormat('Y-m-d', $endDate);

        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');

        $startDay = $start->day;
        $startMonth = $start->translatedFormat('F');
        $startYear = $start->year;

        $endDay = $end->day;
        $endMonth = $end->translatedFormat('F');
        $endYear = $end->year;

        if ($startYear != $endYear) return "$startDay $startMonth $startYear - $endDay $endMonth $endYear";
        if ($startMonth != $endMonth) return "$startDay $startMonth - $endDay $endMonth $endYear";
        return "$startDay - $endDay $endMonth $endYear";
    }

    public static function date($date)
    {
        $carbonDate = Carbon::createFromFormat('Y-m-d', $date);

        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');

        return $carbonDate->translatedFormat('j F Y');
    }
}
