<?php

declare(strict_types=1);

namespace App\Services\Appointment\Commands;

class AddNewAppointment
{
    public int $patientId;

    public string $date;

    public function __construct(int $patientId, string $date)
    {
        $this->patientId = $patientId;
        $this->date = $date;
    }
}
