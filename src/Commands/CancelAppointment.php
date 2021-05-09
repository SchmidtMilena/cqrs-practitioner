<?php

declare(strict_types=1);

namespace App\Commands;

class CancelAppointment
{
    private int $appointmentId;

    public function __construct(int $appointmentId)
    {
        $this->appointmentId = $appointmentId;
    }

    public function getAppointmentId(): int
    {
        return $this->appointmentId;
    }
}
