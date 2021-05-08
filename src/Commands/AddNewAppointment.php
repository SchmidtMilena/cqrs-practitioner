<?php

declare(strict_types=1);

namespace App\Commands;

use App\Models\Appointment;

class AddNewAppointment
{
    private Appointment $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function getAppointment(): Appointment
    {
        return $this->appointment;
    }
}
