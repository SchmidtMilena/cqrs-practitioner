<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class CancelAppointmentHandler
{
    private AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

}
