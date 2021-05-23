<?php

declare(strict_types=1);

namespace App\Services\Appointment\Commands;

class CancelAppointment
{
    public int $appointmentId;

    public function __construct(int $appointmentId)
    {
        $this->appointmentId = $appointmentId;
    }
}
