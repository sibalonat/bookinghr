<?php

namespace App\Bookings;

use Carbon\CarbonPeriod;

// class ClassName
// {

// }

interface Filter
{
    public function apply(
        TimeSlotGenerator $generator,
        CarbonPeriod $interval);
}

