<?php

declare(strict_types=1);

namespace App\Commands;

use App\Models\Patient;
use App\Models\AppointmentData;

class AddNewAppointment
{
    private AppointmentData $appointmentData;
    private Patient $patient;

    public function __construct(AppointmentData $appointmentData, Patient $patient)
    {
        $this->appointmentData = $appointmentData;
        $this->patient = $patient;
    }

    public function getAppointmentData(): AppointmentData
    {
        return $this->appointmentData;
    }

    public function getPatient(): Patient
    {
        return $this->patient;
    }
}
