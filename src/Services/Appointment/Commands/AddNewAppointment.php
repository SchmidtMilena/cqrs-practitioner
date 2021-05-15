<?php

declare(strict_types=1);

namespace App\Services\Appointment\Commands;

use App\Models\AppointmentData;

class AddNewAppointment
{
    private AppointmentData $appointmentData;

    public function __construct(AppointmentData $appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    public function getAppointmentData(): AppointmentData
    {
        return $this->appointmentData;
    }

}
