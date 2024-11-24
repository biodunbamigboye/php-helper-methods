<?php

declare(strict_types=1);

namespace Biodun\PhpHelperMethods\Helpers;

use DateInterval;
use DateTime;
use DateTimeZone;
use Exception;

class Helper
{
    /**
     * Add a number of days to the current date for a given timezone
     * Handles negative numbers as well
     *
     * @param  int  $numberOfDays
     * @param  DateTimeZone|null  $timeZone
     * @param  string  $format
     *
     * @return string|null
     */
    public static function addDays(int $numberOfDays, DateTimeZone $timeZone = null, string $format = 'Y-m-d'): ?string
    {
        try {
            $date = new DateTime(timezone: $timeZone);
            if ($numberOfDays < 0) {
                $date->sub(new DateInterval('P' . abs($numberOfDays) . 'D'));
            } else {
                $date->add(new DateInterval('P' . $numberOfDays . 'D'));
            }

            return $date->format($format);
        } catch (Exception) {
            return null;
        }
    }
}
